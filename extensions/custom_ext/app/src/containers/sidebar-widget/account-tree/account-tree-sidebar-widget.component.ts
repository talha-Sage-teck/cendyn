import {Component, OnDestroy, OnInit} from '@angular/core';
import {
    BaseWidgetComponent,
    FieldManager,
    LanguageStore,
    Metadata,
    MetadataStore,
    RecordListStore,
    RecordListStoreFactory
} from 'core';
import {Subscription} from "rxjs";
import {
    ButtonInterface,
    ColumnDefinition, Field,
    SearchCriteria,
    SearchCriteriaFilter
} from "common";
import {shareReplay, take} from "rxjs/operators";

@Component({
    selector: 'scrm-account-tree-sidebar-widget',
    templateUrl: './account-tree-sidebar-widget.component.html',
    styles: []
})
export class AccountTreeSidebarWidgetComponent extends BaseWidgetComponent implements OnInit, OnDestroy {

    recordList: RecordListStore;
    records: Record<any, any>[];
    loading = false;
    maxHeight = 400;
    module = 'accounts';
    noData = true;

    protected subs: Subscription[] = [];
    protected fieldDefs: ColumnDefinition[];
    protected parentId: string;
    protected parentType: string;

    constructor(
        protected listStoreFactory: RecordListStoreFactory,
        protected meta: MetadataStore,
        protected language: LanguageStore,
        protected fieldManager: FieldManager
    ) {
        super();
        this.recordList = listStoreFactory.create();
    }
    ngOnInit() {
        if (!this.context$) {
            return;
        }

        this.recordList.init(this.module, false);
        this.recordList.setPageSize(20);
        this.initRecordSubscription();
        this.initLoading();

        this.loading = true;
        this.meta.getMetadata(this.module).pipe(
            take(1),
            shareReplay()
        ).subscribe(meta => {
            this.loading = false;
            this.initFieldDefinitions(meta);
            this.initLoadDataSubscription();
        });
    }
    ngOnDestroy() {
    }

    getHeaderLabel(): string {
        return this.language.getFieldLabel('LBL_MODULE_NAME', 'accounts') || '';
    }

    /**
     * Check if all records have been loaded
     */
    allLoaded(): boolean {
        const pagination = this.recordList.getPagination();
        if (!pagination) {
            return false;
        }

        return pagination.pageSize >= pagination.total;
    }

    /**
     * Get load more button definitions
     */
    getLoadMoreButton(): ButtonInterface {
        return {
            klass: 'load-more-button btn btn-link btn-sm',
            labelKey: 'LBL_LOAD_MORE',
            onClick: () => {
                this.loadMore();
            }
        } as ButtonInterface;
    }

    /**
     * Get field
     * @param field
     * @param record
     */
    initField(field: string, record: any): Field {

        if (!field || !record) {
            return null;
        }

        if (record.fields && record.fields[field]) {
            return record.fields[field];
        }

        const definition = this?.fieldDefs[field] ?? null;

        if (!definition) {
            return null;
        }

        return this.fieldManager.addField(record, definition);
    }

    /**
     * Init record subscription
     */
    protected initRecordSubscription(): void {

        this.subs.push(this.recordList.records$.subscribe(records => {
            this.records = records;
        }));
    }

    /**
     * Init loading subscription
     */
    protected initLoading(): void {
        this.subs.push(this.recordList.loading$.subscribe(loading => {
            this.loading = loading === true;
        }));
    }

    /**
     * Update list search criteria
     * @param parentId
     * @param parentType
     */
    protected updateSearchCriteria(): void {
        this.recordList.updateSearchCriteria({
            filters: {
            } as SearchCriteriaFilter,
            orderBy: 'DESC',
            sortOrder: '',
            searchModule: this.module
        } as SearchCriteria);
    }

    /**
     * Init load data subscription
     */
    protected initLoadDataSubscription(): void {
        this.subs.push(this.context$.subscribe(context => {
            this.context = context;

            this.loadData();
        }));
    }

    /**
     * Load Data
     */
    protected loadData(): void {

        this.updateSearchCriteria();

        this.recordList.load().pipe(
            take(1)
        ).subscribe();
    }

    /**
     * Init field definitions
     * @param meta
     */
    protected initFieldDefinitions(meta: Metadata): void {
        const fieldDefinitions = meta?.listView?.fields ?? [];
        this.fieldDefs = [];

        fieldDefinitions.forEach(definition => {
            if (!definition || !definition.name) {
                return
            }

            this.fieldDefs[definition.name] = definition;
        });
    }

    /**
     * Load more records
     * @param jump
     */
    protected loadMore(jump: number = 10): void {
        const pagination = this.recordList.getPagination();
        const currentPageSize = pagination.pageSize || 0;
        let newPageSize = currentPageSize + jump;

        this.recordList.setPageSize(newPageSize);
        this.recordList.updatePagination(0);
    }
}
