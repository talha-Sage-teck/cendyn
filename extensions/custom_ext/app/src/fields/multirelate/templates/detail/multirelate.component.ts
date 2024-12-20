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

import {Component} from '@angular/core';
import {HttpClient, HttpHeaders} from "@angular/common/http";
import {BaseFieldComponent, DataTypeFormatter, FieldLogicManager} from "core";

@Component({
    selector: 'scrm-multirelate-detail',
    templateUrl: './multirelate.component.html',
    styleUrls: []
})
export class MultiRelateDetailFieldComponent extends BaseFieldComponent {

    fieldsArr: any[] = [];

    constructor(
        private http: HttpClient,
        protected typeFormatter: DataTypeFormatter,
        protected logic: FieldLogicManager
    ) {
        super(typeFormatter, logic);
    }

    getMultiRelatedIds = async(): Promise<string>  => {
        let headers = new HttpHeaders();
        headers.set('Content-Type', 'application/json; charset=utf-8');
        return await new Promise((resolve, reject) => {
            this.http.get(location.origin + location.pathname +
                'legacy/index.php?entryPoint=getMultiRelatedIds&id=' +
                this.record.id + '&module=' + this.record.module + '&field=' + this.field.definition.name,
                {headers: headers, responseType: 'text'})
                .subscribe(data => {
                    resolve(data);
                }, error => {
                    reject(error);
                });
        });
    }

    ngOnInit() {
        (async() => {
            let ids = (await this.getMultiRelatedIds()).split(', ');
            let names = this.field.value.split(', ');
            for(let i = 0; i < ids.length; ++i) {
                this.fieldsArr.push({id: ids[i], name: names[i]});
            }
        })();
        super.ngOnInit();
    }
}
