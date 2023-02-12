import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {FieldRegistry, SidebarWidgetRegistry} from 'core';
import {HttpClientModule} from '@angular/common/http';
import {AccountTreeSidebarWidgetModule} from "../containers/sidebar-widget/account-tree/account-tree-sidebar-widget.module";
import {AccountTreeSidebarWidgetComponent} from "../containers/sidebar-widget/account-tree/account-tree-sidebar-widget.component";
import {AccountListModule} from "../views/account-list-view/account-list.module";
import {AccountListContainerModule} from "../views/account-list-view/account-list-container/account-list-container.module";
import {AccountTableModule} from "../components/account-table/account-table.module";
import {AccountTableBodyModule} from "../components/account-table/account-table-body/account-table-body.module";
import {AccountRecordModule} from "../views/account-record-view/account-record.module";
import {MultiRelateEditFieldModule} from "../fields/multirelate/templates/edit/multirelate.module";
import {MultiRelateDetailFieldsModule} from "../fields/multirelate/templates/detail/multirelate.module";
import {MultiRelateFilterFieldModule} from "../fields/multirelate/templates/filter/multirelate.module";
import {MultiselectRecordListModalModule} from "../containers/multiselect-record-list-modal/multiselect-record-list-modal.module";
import {MultiRelateEditFieldComponent} from "../fields/multirelate/templates/edit/multirelate.component";
import {MultiRelateDetailFieldComponent} from "../fields/multirelate/templates/detail/multirelate.component";
import {MultiRelateFilterFieldComponent} from "../fields/multirelate/templates/filter/multirelate.component";
import {OverrideRelateEditFieldComponent} from "../fields/override-relate/edit/override-relate.component";
import {OverrideRelateEditFieldModule} from "../fields/override-relate/edit/override-relate.module";
import {RecordMapperRegistry} from "common";
import {MultiRelateSaveRecordMapper} from "../store/record-mappers/multirelate-save.record-mapper";
@NgModule({
    declarations: [],
    imports: [
        CommonModule,
        HttpClientModule,
        AccountTreeSidebarWidgetModule,
        AccountListContainerModule,
        AccountListModule,
        AccountTableBodyModule,
        AccountTableModule,
        AccountRecordModule,
        MultiRelateEditFieldModule,
        MultiRelateDetailFieldsModule,
        MultiRelateFilterFieldModule,
        MultiselectRecordListModalModule,
        OverrideRelateEditFieldModule
    ],
    providers: []
})
export class ExtensionModule {
    constructor(
        protected fieldRegistry: FieldRegistry,
        protected sidebarWidgetRegistry: SidebarWidgetRegistry,
        protected recordMapperRegistry: RecordMapperRegistry
    ) {
        fieldRegistry.register('default', 'multirelate', 'list', MultiRelateDetailFieldComponent);
        fieldRegistry.register('default', 'multirelate', 'detail', MultiRelateDetailFieldComponent);
        fieldRegistry.register('default', 'multirelate', 'edit', MultiRelateEditFieldComponent);
        fieldRegistry.register('default', 'multirelate', 'filter', MultiRelateFilterFieldComponent);
        fieldRegistry.register('default', 'relate', 'edit', OverrideRelateEditFieldComponent);
        sidebarWidgetRegistry.register('default', 'account-tree', AccountTreeSidebarWidgetComponent);
        recordMapperRegistry.register('default', 'multirelate', new MultiRelateSaveRecordMapper);
    }

    init(): void {
    }
}
