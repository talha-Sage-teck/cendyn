import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {SidebarWidgetRegistry} from 'core';
import {HttpClientModule} from '@angular/common/http';
import {
    AccountTreeSidebarWidgetModule
} from "../containers/sidebar-widget/account-tree/account-tree-sidebar-widget.module";
import {
    AccountTreeSidebarWidgetComponent
} from "../containers/sidebar-widget/account-tree/account-tree-sidebar-widget.component";
import {AccountListModule} from "../views/account-list-view/account-list.module";
import {
    AccountListContainerModule
} from "../views/account-list-view/account-list-container/account-list-container.module";
import {AccountTableModule} from "../components/account-table/account-table.module";
import {AccountTableBodyModule} from "../components/account-table/account-table-body/account-table-body.module";
import {AccountRecordModule} from "../views/account-record-view/account-record.module";

@NgModule({
    declarations: [],
    imports: [
        CommonModule,
        HttpClientModule,
        AccountTreeSidebarWidgetModule,
        AccountListModule,
        AccountListContainerModule,
        AccountTableModule,
        AccountTableBodyModule,
        AccountRecordModule
    ],
})
export class ExtensionModule {
    constructor(protected sidebarWidgetRegistry: SidebarWidgetRegistry) {
        sidebarWidgetRegistry.register('default', 'account-tree', AccountTreeSidebarWidgetComponent);
    }

    init(): void {
    }
}
