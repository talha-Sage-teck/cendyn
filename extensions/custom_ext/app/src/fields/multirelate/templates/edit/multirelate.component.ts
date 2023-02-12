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

import {Component, ViewChild} from '@angular/core';
import {TagInputComponent} from 'ngx-chips';
import {AttributeMap, ButtonInterface, deepClone, Field, Record} from 'common';
import {NgbModal} from '@ng-bootstrap/ng-bootstrap';
import {EMPTY, Observable, of} from "rxjs";
import {HttpClient, HttpHeaders} from "@angular/common/http";
import {
    BaseRelateComponent,
    DataTypeFormatter,
    FieldLogicManager,
    LanguageStore,
    ModuleNameMapper, RecordListModalResult,
    RelateService
} from "core";
import {TagModel} from "ngx-chips/core/accessor";
import { MultiselectRecordListModalComponent } from 'extensions/custom_ext/app/src/customExt';

@Component({
    selector: 'scrm-multirelate-edit',
    templateUrl: './multirelate.component.html',
    styleUrls: [],
    providers: [RelateService]
})
export class MultiRelateEditFieldComponent extends BaseRelateComponent {
    @ViewChild('tag') tag: TagInputComponent;
    selectButton: ButtonInterface;
    selectedTags: string[] | TagModel[];
    idField: Field;
    pModule: string;
    unrelated: number;

    /**
     * Constructor
     *
     * @param {object} languages service
     * @param {object} typeFormatter service
     * @param {object} relateService service
     * @param {object} moduleNameMapper service
     * @param {object} modalService service
     * @param {object} logic
     */
    constructor(
        private http: HttpClient,
        protected languages: LanguageStore,
        protected typeFormatter: DataTypeFormatter,
        protected relateService: RelateService,
        protected moduleNameMapper: ModuleNameMapper,
        protected modalService: NgbModal,
        protected logic: FieldLogicManager
    ) {
        super(languages, typeFormatter, relateService, moduleNameMapper, logic);

        this.selectButton = {
            klass: ['btn', 'btn-sm', 'btn-outline-secondary', 'select-button', 'm-0'],
            onClick: (): void => {
                this.showSelectModal();
            },
            icon: 'cursor'
        } as ButtonInterface;
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

    /**
     * On init handler
     */
    ngOnInit(): void {
        super.ngOnInit();
        (async() => {
            if(!this.field.valueList) {
                if (!this.field.valueList)
                    this.field.valueList = [];

                if (!this.field.valueObjectArray)
                    this.field.valueObjectArray = [];

                const values = (this.field.value && this.field.criteria && this.field.criteria.values) || [];

                if (values.length > 0) {
                    this.field.valueList = values;
                    this.selectedTags = values;
                }

                const valueObjectArray = (this.field && this.field.valueObjectArray) || [];

                if (this.field.value && typeof this.field.value !== "undefined") {
                    let ids = (await this.getMultiRelatedIds()).split(', ');
                    let names = this.field.value.split(', ');
                    for (let i = 0; i < ids.length; ++i) {
                        valueObjectArray.push({id: ids[i], name: names[i]});
                        this.field.valueList.push(names[i]);
                    }
                }

                if (valueObjectArray.length > 0) {
                    this.field.valueObjectArray = deepClone(valueObjectArray);
                    this.selectedTags = deepClone(valueObjectArray);
                }
                this.init();
            }
        })();
    }

    protected init(): void {

        super.init();

        this.initValue();

        const idFieldName = this.getRelateIdField();
        if (idFieldName && this.record && this.record.fields && this.record.fields[idFieldName]) {
            this.idField = this.record.fields[idFieldName];
        }
    }

    protected initValue(): void {
        if (!this.field.valueObjectArray) {
            this.selectedValues = [];
            return;
        }

        this.selectedValues = [];
        this.field.valueObjectArray.forEach((o) => {
            if(o.id.trim() !== '')
                this.selectedValues.push(o);
        });
    }

    /**
     * Handle newly added item
     *
     * @param {object} item added
     */
    onAdd(item): void {
        if (item) {

            this.setValue(item);
            return;
        }
    }

    /**
     * Handle item removal
     */
    onRemove(item): void {
        const id = item.id ?? '';
        const value = item.name ?? '';
        this.field.valueList = this.field.valueList.filter(element => element !== value);

        this.field.valueObjectArray = this.field.valueObjectArray.filter(element => element.id !== id);

        if(this.idField && id){
            this.idField.valueList = this.idField.valueList.filter(element => element !== id);
        }

        setTimeout(() => {
            this.tag.focus(true, true);
        }, 200);
    }

    /**
     * Set value on field
     *
     * @param {string} id to set
     * @param {string} relateValue to set
     */
    protected setValue(item: any): void {
        const relateName = this.getRelateFieldName();
        const id = item.id;
        const relateValue = item[relateName];

        if(this.idField && this.idField.valueList.includes(id)){
            return;
        }

        if(!this.idField && this.field.valueList.includes(relateValue)){
            return;
        }

        this.field.valueList.push(relateValue);
        const relate = this.buildRelate(id, relateValue);
        this.field.valueObjectArray.push(relate);

        if (this.idField){
            this.idField.valueList.push(id);
        }

        this.field.formControl.setValue(this.field.valueObjectArray);
        this.field.formControl.markAsDirty();
    }

    onAdding(item): Observable<TagModel> {

        if (!item) {
            return EMPTY;
        }

        if(this.idField && this.idField.valueList.includes(item.id)){
            return EMPTY;
        }

        const relateName = this.getRelateFieldName();

        if(!this.idField && this.field.valueList.includes(item[relateName])){
            return EMPTY;
        }

        return of(item);
    }

    /**
     * Show record selection modal
     */
    protected showSelectModal(): void {
        const modal = this.modalService.open(MultiselectRecordListModalComponent, {size: 'xl', scrollable: true});

        modal.componentInstance.module = this.getRelatedModule();

        modal.result.then((data: RecordListModalResult) => {

            if (!data || !data.selection || !data.selection.selected) {
                return;
            }
            const records = this.getSelectedRecord(data);
            records.forEach(record => this.setItem(record));
        });
    }

    /**
     * Get Selected Record
     *
     * @param {object} data RecordListModalResult
     * @returns {object} Record
     */
    protected getSelectedRecord(data: RecordListModalResult): Record[] {
        let id = [];
        Object.keys(data.selection.selected).forEach(selected => {
            id.push(selected);
        });

        let records: Record[] = [];

        data.records.forEach(rec => {
            if (rec && id.includes(rec.id)) {
                records.push(rec);
            }
        });

        return records;
    }

    /**
     * Set the record as the selected item
     *
     * @param {object} record to set
     */
    protected setItem(record: Record): void {
        if(this.field.valueList.includes(record.attributes[this.getRelateFieldName()]))
            return;
        this.tag.appendTag(record.attributes);
        this.onAdd(record.attributes);
    }

    public selectFirstElement(): void {
        const filteredElements: TagModel = this.tag.dropdown.items;
        if (filteredElements.length !== 0) {
            const firstElement = filteredElements[0];
            this.tag.appendTag(firstElement);
            this.onAdd(firstElement);
            this.tag.dropdown.hide();
        }
    }

}
