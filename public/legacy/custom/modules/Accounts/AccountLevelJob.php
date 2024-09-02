<?php

class AccountLevelJob
{
    public function updateAccountLevels($bean, $event, $arguments)
    {
        global $db;

        // Check if this is a new account or if the parent_id has changed
        if ($bean->fetched_row['parent_id'] != $bean->parent_id) {
            $accountsToUpdate = [$bean->id];

            // If there's a new parent, add it to the list of accounts to update
            if (!empty($bean->parent_id)) {
                $accountsToUpdate[] = $bean->parent_id;
            }

            // If there was an old parent, add it to the list of accounts to update
            if (!empty($bean->fetched_row['parent_id'])) {
                $accountsToUpdate[] = $bean->fetched_row['parent_id'];
            }

            // Update account levels for affected accounts
            foreach ($accountsToUpdate as $accountId) {
                $level = $this->calculateAccountLevel($accountId);
                $this->updateAccountLevel($accountId, $level);
            }
        }
    }

    private function calculateAccountLevel($accountId)
    {
        global $db;

        // Check if the account has a parent
        $parentQuery = "SELECT parent_id FROM accounts WHERE id = '$accountId' AND deleted = 0";
        $parentResult = $db->getOne($parentQuery);
        $hasParent = !empty($parentResult);

        // Check if the account has children
        $childrenQuery = "SELECT COUNT(*) FROM accounts WHERE parent_id = '$accountId' AND deleted = 0";
        $childrenCount = $db->getOne($childrenQuery);
        $hasChildren = $childrenCount > 0;

        if ($hasChildren && !$hasParent) {
            return 'MAC';  // Master Account
        } elseif ($hasChildren && $hasParent) {
            return 'ACC';  // Parent Account
        } elseif (!$hasChildren && $hasParent) {
            return 'SUB';  // Sub-Account
        }

        return '';  // Default (if no match)
    }

    private function updateAccountLevel($accountId, $level)
    {
        global $db;
        $updateQuery = "UPDATE accounts SET account_level = '$level' WHERE id = '$accountId'";
        $db->query($updateQuery);
    }
}