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

import {Component, OnDestroy, OnInit} from '@angular/core';
import {combineLatest, Observable, Subscription} from 'rxjs';
import {map} from 'rxjs/operators';
import {ViewContext, WidgetMetadata} from 'common';
import {CustomRecordViewStore} from "../store/custom-record-view.store";
import {
    LanguageStrings,
    LanguageStore,
    MetadataStore,
    RecordContentDataSource,
    SubpanelContainerConfig
} from 'core';
import {OverrideTopWidgetAdapter} from "../adapters/override-top-widget.adapter";
import {OverrideRecordContentAdapter} from "../adapters/override-record-content.adapter";
import {OverrideSidebarWidgetAdapter} from "../adapters/override-sidebar-widget.adapter";
import {OverrideBottomWidgetAdapter} from "../adapters/override-bottom-widget.adapter";

@Component({
    selector: 'scrm-override-record-container',
    templateUrl: 'override-record-container.component.html',
    providers: [OverrideRecordContentAdapter, OverrideTopWidgetAdapter, OverrideSidebarWidgetAdapter, OverrideBottomWidgetAdapter]
})
export class OverrideRecordContainerComponent implements OnInit, OnDestroy {

    loading: boolean = true;
    language$: Observable<LanguageStrings> = this.language.vm$;

    vm$ = combineLatest([
        this.language$,
        this.sidebarWidgetAdapter.config$,
        this.bottomWidgetAdapter.config$,
        this.topWidgetAdapter.config$,
        this.recordViewStore.showSubpanels$
    ]).pipe(
        map((
            [
                language,
                sidebarWidgetConfig,
                bottomWidgetConfig,
                topWidgetConfig,
                showSubpanels
            ]
        ) => ({
            language,
            sidebarWidgetConfig,
            bottomWidgetConfig,
            topWidgetConfig,
            showSubpanels
        }))
    );

    protected subs: Subscription[] = [];

    constructor(
        public recordViewStore: CustomRecordViewStore,
        protected language: LanguageStore,
        protected metadata: MetadataStore,
        protected contentAdapter: OverrideRecordContentAdapter,
        protected topWidgetAdapter: OverrideTopWidgetAdapter,
        protected sidebarWidgetAdapter: OverrideSidebarWidgetAdapter,
        protected bottomWidgetAdapter: OverrideBottomWidgetAdapter
    ) {
    }

    ngOnInit(): void {
        this.subs.push(this.recordViewStore.loading$.subscribe(loading => {
            this.loading = loading;
        }))
    }

    ngOnDestroy() {
        this.subs.forEach(sub => sub.unsubscribe());
    }

    getContentAdapter(): RecordContentDataSource {
        return this.contentAdapter;
    }

    getSubpanelsConfig(): SubpanelContainerConfig {
        return {
            parentModule: this.recordViewStore.getModuleName(),
            subpanels$: this.recordViewStore.subpanels$,
            sidebarActive$: this.recordViewStore.widgets$
        } as SubpanelContainerConfig;
    }

    getViewContext(): ViewContext {
        return this.recordViewStore.getViewContext();
    }

    getViewContext$(): Observable<ViewContext> {
        return this.recordViewStore.viewContext$;
    }

    hasTopWidgetMetadata(meta: WidgetMetadata): boolean {
        return !!(meta && meta.type);
    }
}
