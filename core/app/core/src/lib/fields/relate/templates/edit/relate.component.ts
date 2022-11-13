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
import {ButtonInterface, Field, ModalButtonInterface, Record} from 'common';
import {NgbModal} from '@ng-bootstrap/ng-bootstrap';
import {ModuleNameMapper} from '../../../../services/navigation/module-name-mapper/module-name-mapper.service';
import {DataTypeFormatter} from '../../../../services/formatters/data-type.formatter.service';
import {RecordListModalComponent} from '../../../../containers/record-list-modal/components/record-list-modal/record-list-modal.component';
import {BaseRelateComponent} from '../../../base/base-relate.component';
import {LanguageStore} from '../../../../store/language/language.store';
import {RelateService} from '../../../../services/record/relate/relate.service';
import {RecordListModalResult} from '../../../../containers/record-list-modal/components/record-list-modal/record-list-modal.model';
import {TagModel} from "ngx-chips/core/accessor";
import {FieldLogicManager} from '../../../field-logic/field-logic.manager';
import {HttpClient, HttpHeaders} from "@angular/common/http";
import {Router} from "@angular/router";
import {MessageModalComponent} from "../../../../components/modal/components/message-modal/message-modal.component";

@Component({
    selector: 'scrm-relate-edit',
    templateUrl: './relate.component.html',
    styleUrls: [],
    providers: [RelateService]
})
export class RelateEditFieldComponent extends BaseRelateComponent {
    @ViewChild('tag') tag: TagInputComponent;
    selectButton: ButtonInterface;
    idField: Field;
    pModule: string;
    rec: string;

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
        private router: Router,
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

    /**
     * On init handler
     */
    ngOnInit(): void {

        super.ngOnInit();
        let r = this.router.url.split('/');
        this.pModule = r[1];
        this.rec = r[r.length - 1];
        this.init();
    }

    protected init(): void {

        super.init();

        this.initValue();

        const idFieldName = this.getRelateIdField();
        if (idFieldName && this.record && this.record.fields && this.record.fields[idFieldName]) {
            this.idField = this.record.fields[idFieldName];
        }
    }

    runPMSProfilesAction(): void {
        let headers = new HttpHeaders();
        headers.set('Content-Type', 'application/json; charset=utf-8');
        this.http.get(location.origin + location.pathname + 'legacy/index.php?entryPoint=relateProfilesToAccount&profileID=' +
            this.rec, {headers: headers, responseType: 'text'})
            .subscribe(data => {}, error => console.log("Error: " + error));
    }

    protected initValue(): void {
        if (!this.field.valueObject) {
            this.selectedValues = [];
            return;
        }

        if (!this.field.valueObject.id) {
            this.selectedValues = [];
            return;
        }

        this.selectedValues = [];
        this.selectedValues.push(this.field.valueObject);
    }

    /**
     * Handle newly added item
     *
     * @param {object} item added
     */
    onAdd(item): void {
        if (item) {
            const relateName = this.getRelateFieldName();
            this.setValue(item.id, item[relateName]);
            let uuidPattern = /^[0-9a-fA-F]{8}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{4}\b-[0-9a-fA-F]{12}$/;
            if(this.field.definition.module.toLowerCase() === "accounts" && this.module.toLowerCase() === "cb2b_pmsprofiles" && this.rec !== null && this.rec !== '' && typeof this.rec !== 'undefined' && uuidPattern.test(this.rec)) {
                const modal = this.modalService.open(MessageModalComponent);
                modal.componentInstance.textKey = 'LBL_POPUP_PROFILES';
                modal.componentInstance.buttons = [
                    {
                        labelKey: 'LBL_POPUP_NO',
                        klass: ['btn-secondary'],
                        onClick: activeModal => {
                            activeModal.dismiss();
                        }
                    } as ModalButtonInterface,
                    {
                        labelKey: 'LBL_POPUP_YES',
                        klass: ['btn-main'],
                        onClick: activeModal => {
                            this.runPMSProfilesAction();
                            activeModal.close();
                        }
                    } as ModalButtonInterface,
                ];
            }
            return;
        }

        this.setValue('', '');
        this.selectedValues = [];

        return;
    }

    /**
     * Handle item removal
     */
    onRemove(): void {
        this.setValue('', '');
        this.selectedValues = [];

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
    protected setValue(id: string, relateValue: string): void {
        const relate = this.buildRelate(id, relateValue);
        this.field.value = relateValue;
        this.field.valueObject = relate;
        this.field.formControl.setValue(relateValue);
        this.field.formControl.markAsDirty();

        if (this.idField) {
            this.idField.value = id;
            this.idField.formControl.setValue(id);
            this.idField.formControl.markAsDirty();
        }
    }

    /**
     * Show record selection modal
     */
    protected showSelectModal(): void {
        const modal = this.modalService.open(RecordListModalComponent, {size: 'xl', scrollable: true});

        modal.componentInstance.module = this.getRelatedModule();

        modal.result.then((data: RecordListModalResult) => {

            if (!data || !data.selection || !data.selection.selected) {
                return;
            }

            const record = this.getSelectedRecord(data);
            this.setItem(record);
        });
    }

    /**
     * Get Selected Record
     *
     * @param {object} data RecordListModalResult
     * @returns {object} Record
     */
    protected getSelectedRecord(data: RecordListModalResult): Record {
        let id = '';
        Object.keys(data.selection.selected).some(selected => {
            id = selected;
            return true;
        });

        let record: Record = null;

        data.records.some(rec => {
            if (rec && rec.id === id) {
                record = rec;
                return true;
            }
        });

        return record;
    }

    /**
     * Set the record as the selected item
     *
     * @param {object} record to set
     */
    protected setItem(record: Record): void {
        this.tag.writeValue([record.attributes]);
        this.onAdd(record.attributes);
    }

    public selectFirstElement(): void {
        const filteredElements: TagModel = this.tag.dropdown.items;
        if (filteredElements.length !== 0) {
            const firstElement = filteredElements[0];
            this.selectedValues.push(firstElement);
            this.onAdd(firstElement);
            this.tag.dropdown.hide();
        }
    }

}
