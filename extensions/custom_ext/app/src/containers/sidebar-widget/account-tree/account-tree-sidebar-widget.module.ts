import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {AccountTreeSidebarWidgetComponent} from './account-tree-sidebar-widget.component';
import {LoadingSpinnerModule, WidgetPanelModule} from 'core';

@NgModule({
    declarations: [AccountTreeSidebarWidgetComponent],
    exports: [
        AccountTreeSidebarWidgetComponent
    ],
    imports: [
        CommonModule,
        LoadingSpinnerModule,
        WidgetPanelModule,
    ]
})
export class AccountTreeSidebarWidgetModule {
}
