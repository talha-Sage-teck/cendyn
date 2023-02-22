import {AfterViewInit, Component, Input, OnInit} from '@angular/core';
import {ColumnDefinition, Record} from 'common';
import {NgbModal} from "@ng-bootstrap/ng-bootstrap";
import {AccountPopupComponent} from "../../../../views/account-list-view/account-popup/account-popup.component";
import {HttpClient, HttpHeaders} from "@angular/common/http";

@Component({
  selector: 'scrm-account-badge',
  templateUrl: './account-badge.component.html',
  styleUrls: ['./account-badge.component.scss']
})
export class AccountBadgeComponent implements OnInit, AfterViewInit {

  @Input("record") record: Record;
  @Input("data") data: any[] = null;
  @Input("column") column: ColumnDefinition = null;
  @Input("fontSize") fontSize: number = 10;
  @Input("height") height: number = 20;
  @Input("listView") listView: boolean = false;
  content: string;
  isNameColumn: boolean;
  showBadge: boolean;
  subAccounts: any[];
  maxDepth: number;
  loading: boolean = false;
  _reload: boolean = true;

  constructor(
      private http: HttpClient,
      protected modalService: NgbModal
  ) { }

  ngOnInit(): void {
      if(this.column)
        this.isNameColumn = this.checkNameColumn();
      else
        this.isNameColumn = true;
  }

  ngAfterViewInit() {
    if (!this.listView) {
      let headers = new HttpHeaders();
      headers.set('Content-Type', 'application/json; charset=utf-8');
      new Promise((resolve, reject) => {
        this.http.get(location.origin + location.pathname +
            'legacy/index.php?entryPoint=getSubAccounts', {
          headers: headers,
          responseType: 'text'
        }).subscribe(data => {
          this.data = JSON.parse(data);
          this.init().then(() => {
            this.reload();
          });
        }, error => reject(error));
      });
    }
    else
      this.init().then(() => {
        this.reload();
      });
  }

  private reload() {
    setTimeout(() => this._reload = false);
    setTimeout(() => this._reload = true);
  }

  checkNameColumn(): boolean {
    return this.column.name.toLowerCase() === "name";
  }

  backTraverse(account: any, depth = 0) {
    if(account) {
      if (account['parent_id'] && account['parent_id'].trim() !== "") {
        let master = this.data['accounts'][account['parent_id']];
        if(depth < this.maxDepth)
          return this.backTraverse(master, depth + 1);
        else
          return master;
      }
      else
        return account;
    }
    else
      console.log("Parent for record ID could not be loaded");
    return account;
  }

  makeTree(account, marked, data = [], index = 0) {
    if(account && typeof account === "object") {
      if(account['id']) {
        if(account['id'] == marked) {
          account['marked'] = 1;
        }
        else {
          account['marked'] = 0;
        }
        account['ind'] = index;
        data.push(account);
        if(this.data['children'][account['id']] && this.data['children'][account['id']].length > 0 && index < this.maxDepth) {
          this.data['children'][account['id']].forEach((child) => {
            if (child)
              data = this.makeTree(this.data['accounts'][child], marked, data, index + 1);
          });
          return data;
        }
        else
          return data;
      }
      else
        return data;
    }
    else {
      console.log("Could not load sub-accounts for record ID");
      return data;
    }
  }

  init = async(): Promise<void> => {
    if(this.isNameColumn && this.data['max_depth']) {

      // get sub-accounts array
      this.maxDepth = this.data['max_depth'];
      let master = this.backTraverse(this.data['accounts'][this.record.id]);
      this.subAccounts = this.makeTree(master, this.record.id);
      let children = this.makeTree(this.data['accounts'][this.record.id], this.record.id);
      // if there are subaccounts and no parent, it means it is master
      if (children.length > 1 && this.record.attributes.parent_id.trim() == "" || this.record.attributes.parent_id == null) {
        this.content = "Master";
        this.showBadge = true;
      } else if (children.length > 1 && this.record.attributes.parent_id && this.record.attributes.parent_id.trim() !== "") {
        this.content = "Parent";
        this.showBadge = true;
      } else if (children.length == 1 && this.record.attributes.parent_id && this.record.attributes.parent_id.trim() !== "") {
        this.content = "Sub-Account";
        this.showBadge = true;
      } else {
        this.showBadge = false;
      }
    }
  }

  showHierarchy(marked: string): void {
    if(this.column) {
      this.loading = true;
      const modal = this.modalService.open(AccountPopupComponent, {size: 'xl', scrollable: true});
      modal.componentInstance.marked = marked;
      modal.componentInstance.parent = this.record;
      modal.componentInstance.accounts = this.subAccounts;
      modal.componentInstance.accountName = this.record.attributes.name;
      modal.shown.pipe().subscribe((value) => {
        this.loading = false;
      });
    }
    else {
      // slide to subpanel
      window.scrollTo(0, document.body.scrollHeight);

    }
  }
}
