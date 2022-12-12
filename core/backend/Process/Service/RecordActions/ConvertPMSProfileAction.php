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
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */


namespace App\Process\Service\RecordActions;

use ApiPlatform\Core\Exception\InvalidArgumentException;
use App\Process\Entity\Process;
use App\Module\Service\ModuleNameMapperInterface;
use App\Process\Service\ProcessHandlerInterface;
use App\Data\LegacyHandler\RecordHandler;

/***
 * Custom Action class for converting PMS Profile to Account
 */

class ConvertPMSProfileAction implements ProcessHandlerInterface
{
    protected const MSG_OPTIONS_NOT_FOUND = 'Process options is not defined';
    protected const PROCESS_TYPE = 'record-convert-pms-profile';

    /**
     * @var ModuleNameMapperInterface
     */
    private $moduleNameMapper;

    /**
     * @var RecordHandler
     */
    private $recordHandler;

    /**
     * ConvertPMSProfileAction constructor.
     * @param ModuleNameMapperInterface $moduleNameMapper
     * @param RecordHandler $recordHandler
     */
    public function __construct(ModuleNameMapperInterface $moduleNameMapper, RecordHandler $recordHandler)
    {
        $this->moduleNameMapper = $moduleNameMapper;
        $this->recordHandler = $recordHandler;
    }

    /**
     * @inheritDoc
     */
    public function getProcessType(): string
    {
        return self::PROCESS_TYPE;
    }

    /**
     * @inheritDoc
     */
    public function requiredAuthRole(): string
    {
        return 'ROLE_USER';
    }

    /**
     * @inheritDoc
     */
    public function configure(Process $process): void
    {
        //This process is synchronous
        //We aren't going to store a record on db
        //thus we will use process type as the id
        $process->setId(self::PROCESS_TYPE);
        $process->setAsync(false);
    }

    /**
     * @inheritDoc
     *
     */
    public function validate(Process $process): void
    {
        if (empty($process->getOptions())) {
            throw new InvalidArgumentException(self::MSG_OPTIONS_NOT_FOUND);
        }

        $options = $process->getOptions();
        [
            'module' => $baseModule,
            'id' => $id
        ] = $options;

        if (empty($baseModule) || empty($id)) {
            throw new InvalidArgumentException(self::MSG_OPTIONS_NOT_FOUND);
        }
    }

    /**
     * @inheritDoc
     */
    public function run(Process $process)
    {
        $options = $process->getOptions();
        [
            'id' => $baseId
        ] = $options;
        $is_account_set = $this->getLinkedAccount($baseId);
        if(!$is_account_set) {
            $responseData = $this->makeResponseData($options);
            $process->setStatus('success');
            $process->setMessages([]);
            $process->setData($responseData);
        }
        else {
            $process->setMessages(['LBL_ACCOUNT_ALREADY_RELATED']);
        }
    }

    /**
     * @param array|null $options
     * @return array
     */
    protected function makeResponseData(?array $options): array
    {
        [
            'module' => $baseModule,
            'id' => $baseRecordId
        ] = $options;

        return [
            'handler' => 'redirect',
            'params' => [
                'route' =>  'accounts/convertprofileedit',
                'queryParams' => [
                    'action_module' => 'accounts',
                    'return_action' => 'DetailView',
                    'return_module' => $baseModule,
                    'return_id' => $baseRecordId
                ]
            ]
        ];
    }

    /***
     * Checks if an account is linked with the PMS Profile identified with given ID
     * @Input
     * Current Profile ID
     * @Output
     * 0: if no account is registered
     * 1: if account is linked
     */

    protected function getLinkedAccount($profileID)
    {
        $profileBean = $this->recordHandler->getRecord('CB2B_PMSProfiles', $profileID);
        if($profileBean->getAttributes()['accounts_cb2b_pmsprofiles_1accounts_ida'] &&
        trim($profileBean->getAttributes()['accounts_cb2b_pmsprofiles_1accounts_ida']) !== '')
            return true;
        else
            return false;
    }

}
