import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {FieldRegistry, SidebarWidgetRegistry} from 'core';
import {HttpClientModule} from '@angular/common/http';
import {AccountTreeSidebarWidgetModule} from "../containers/sidebar-widget/account-tree/account-tree-sidebar-widget.module";
import {AccountTreeSidebarWidgetComponent} from "../containers/sidebar-widget/account-tree/account-tree-sidebar-widget.component";
import {OverrideListModule} from "../views/override-list-view/override-list.module";
import {OverrideListContainerModule} from "../views/override-list-view/override-list-container/override-list-container.module";
import {AccountTableModule} from "../components/account-table/account-table.module";
import {AccountTableBodyModule} from "../components/account-table/account-table-body/account-table-body.module";
import {OverrideRecordModule} from "../views/override-record-view/override-record.module";
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
import {OverrideEnumEditFieldComponent} from "../fields/override-enum/edit/override-enum.component";
import {OverrideEnumEditFieldModule} from "../fields/override-enum/edit/override-enum.module";
import {OverrideListHeaderModule} from "../views/override-list-view/override-list-header/override-list-header.module";
import {OverrideCreateRecordModule} from "../views/override-create-view/override-create-record.module";
@NgModule({
    declarations: [],
    imports: [
        CommonModule,
        HttpClientModule,
        AccountTreeSidebarWidgetModule,
        OverrideListHeaderModule,
        OverrideListContainerModule,
        OverrideListModule,
        AccountTableBodyModule,
        AccountTableModule,
        OverrideRecordModule,
        MultiRelateEditFieldModule,
        MultiRelateDetailFieldsModule,
        MultiRelateFilterFieldModule,
        MultiselectRecordListModalModule,
        OverrideRelateEditFieldModule,
        OverrideEnumEditFieldModule,
        OverrideCreateRecordModule
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
        fieldRegistry.register('default', 'enum', 'edit', OverrideEnumEditFieldComponent);
        sidebarWidgetRegistry.register('default', 'account-tree', AccountTreeSidebarWidgetComponent);
        recordMapperRegistry.register('default', 'multirelate', new MultiRelateSaveRecordMapper);
    }

    init(): void {
    }
}
