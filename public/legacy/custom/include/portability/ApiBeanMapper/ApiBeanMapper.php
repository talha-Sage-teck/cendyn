<?php
/**
 * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
 * Copyright (C) 2021 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see http://www.gnu.org/licenses.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

require_once __DIR__ . '/../../../../../../public/legacy/include/portability/ApiBeanMapper/ApiBeanMapper.php';

class ApiBeanMapperCustom extends ApiBeanMapper
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param SugarBean $bean
     * @return array
     */
    public function toApi(SugarBean $bean): array
    {
        $bean->field_defs = $this->mapLinkedModule($bean);

        $arr = [];

        $arr['module_name'] = $bean->module_name ?? '';
        $arr['object_name'] = $bean->object_name ?? '';

        [$linkFields, $idFields] = $this->getLinkFields($bean);

        foreach ($bean->field_defs as $field => $definition) {
            if ($this->isSensitiveField($definition)) {
                continue;
            }

            if (!$this->checkFieldAccess($bean, $definition)) {
                continue;
            }

            if (!$this->isIdField($idFields, $field) && $this->isLinkField($definition)) {
                if (!$this->hasLinkMapper($bean->module_name, $definition)) {
                    continue;
                }

                $this->mapLinkFieldToApi($bean, $arr, $definition);

                continue;
            }

            if ($this->isIdField($idFields, $field) && $this->isLinkField($definition)) {
                $this->setValue($bean, $field, $arr, $definition);
                continue;
            }

            if ($this->isRelateField($definition)) {
                $this->addRelateFieldToArray($bean, $definition, $arr, $field);
                continue;
            }

            if($this->isMultiRelateField($definition)) {
                $this->addRelateFieldToArray($bean, $definition, $arr, $field);
                continue;
            }

            if ($this->isLinkField($definition)) {
                continue;
            }

            $this->setValue($bean, $field, $arr, $definition);
        }

        return $arr;
    }

    /**
     * @param $definition
     * @return bool
     */
    protected function isMultiRelateField($definition): bool
    {
        return isset($definition['type']) && $definition['type'] === 'multirelate';
    }
}
