<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

class MultiRelateLinking
{
    private function removeDeletedBeans(&$bean, $rel, $related_ids, $module) {
        $bean->load_relationship($rel);
        $ids = $bean->$rel->get();
        $newIds = array_filter($ids, function($id) use($module, &$bean, $related_ids, $rel) {
            if(!in_array($id, $related_ids)) {
                $related_bean = BeanFactory::getBean($module, $id);
                $bean->$rel->delete($bean->id, $related_bean);
                return false;
            }
            return true;
        });
        return array_values($newIds);
    }

    public function link_records_in_relation(SugarBean $bean) {
        foreach ($bean->field_defs as $field => $def) {
            if(strtolower($def['type']) === "multirelate" && $def['relation']) {
                $id_name = $def['id_name'];
                $related_ids = explode(", ", $bean->$id_name);
                $rel = $def['relation'];
                $ids = $this->removeDeletedBeans($bean, $rel, $related_ids, $def['module']);
                foreach($related_ids as $id) {
                    if(!in_array($id, $ids)) {
                        $bean->load_relationship($rel);
                        $relatedBean = BeanFactory::getBean($def['module'], $id);
                        $bean->$rel->add($relatedBean);
                    }
                }
            }
        }
    }

    public function set_related_names(SugarBean $bean) {
        foreach($bean->field_defs as $field => $defs) {
            if(strtolower($defs['type']) === 'multirelate') {
                $id_name = $defs['id_name'];
                $rel = $defs['relation'];
                $related_module = $defs['module'];
                $name = $defs['name'];
                if ($bean->load_relationship($rel)) {
                    $ids = $bean->$rel->get();
                    $bean->$id_name = implode(", ", $ids);
                    if (!empty($bean->$id_name) &&
                        ($bean->object_name != $related_module ||
                            ($bean->object_name == $related_module && $bean->$id_name != $bean->id))
                    ) {
                        if (!empty($bean->$id_name) && isset($bean->$name)) {
                            $names = array ();
                            foreach ($ids as $id) {
                                $mod = BeanFactory::getShallowBean($related_module, $id);
                                if ($mod) {
                                    if (!empty($defs['rname'])) {
                                        $rname = $defs['rname'];
                                        $names[] = $mod->$rname;
                                    } else {
                                        if (isset($mod->name)) {
                                            $names[] = $mod->name;
                                        }
                                    }
                                }
                            }
                            $bean->$name = implode(", ", $names);
                        }
                    }
                }
            }
        }
    }
}
