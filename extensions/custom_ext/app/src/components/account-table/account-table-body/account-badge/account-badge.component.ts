import {Component, Input, OnInit} from '@angular/core';
import {ColumnDefinition, Record} from 'common';
import {NgbModal} from "@ng-bootstrap/ng-bootstrap";
import {AccountPopupComponent} from "../../../../views/account-list-view/account-popup/account-popup.component";
import {HttpClient, HttpHeaders} from "@angular/common/http";

@Component({
  selector: 'scrm-account-badge',
  templateUrl: './account-badge.component.html',
  styleUrls: ['./account-badge.component.scss']
})
export class AccountBadgeComponent implements OnInit {

  @Input("record") record: Record;
  @Input("data") data: any[] = null;
  @Input("column") column: ColumnDefinition = null;
  @Input("fontSize") fontSize: number = 10;
  @Input("height") height: number = 20;
  @Input("listView") listView: boolean = false;
  content: string;
  isNameColumn: boolean;
  isParent: boolean;
  subAccounts: any[];
  maxDepth: number;

  constructor(
      private http: HttpClient,
      protected modalService: NgbModal
  ) { }

  ngOnInit(): void {
    (async() => {
      if(this.column)
        this.isNameColumn = this.checkNameColumn();
      else
        this.isNameColumn = true;

      if(!this.listView) {
        let headers = new HttpHeaders();
        headers.set('Content-Type', 'application/json; charset=utf-8');
        this.data = await new Promise((resolve, reject) => {
          this.http.get(location.origin + location.pathname +
            'legacy/index.php?entryPoint=getSubAccounts', {
            headers: headers,
            responseType: 'text'
          }).subscribe(data => {
            resolve(JSON.parse(data));
          }, error => reject(error));
        });
      }
      this.isParent = await this.checkIfParent();
    })();
  }

  checkNameColumn(): boolean {
    return this.column.name.toLowerCase() === "name";
  }

  backTraverse(database: any[], account: any, depth = 0) {
    if(account) {
      if (account['parent_id'] && account['parent_id'].trim() !== "") {
        let master = database[account['parent_id']];
        if(depth < this.maxDepth)
          return this.backTraverse(database, master, depth + 1);
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

  makeTree(database, children, account, marked, data = [], index = 0) {
    if(account) {
      if(account['id']) {
        if(account['id'] == marked)
          account['marked'] = 1;
        else
          account['marked'] = 0;
        account["ind"] = index;
        data.push(account);
        if(children[account['id']] && children[account['id']].length > 0 && index < this.maxDepth) {
          children[account['id']].forEach((child) => {
            if (child)
              data = this.makeTree(database, children, database[child], marked, data, index + 1);
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

  checkIfParent = async(): Promise<boolean> => {
    let isParent = false;
    if(this.isNameColumn && this.data['max_depth']) {

      // get sub-accounts array
      this.maxDepth = this.data['max_depth'];
      let master = this.backTraverse(this.data['accounts'], this.data['accounts'][this.record.id]);
      this.subAccounts = this.makeTree(this.data['accounts'], this.data['children'], master, this.record.id);
      if(typeof this.subAccounts === "object" && this.subAccounts.length > 1)
        isParent = true;

      // if there are subaccounts and no parent, it means it is master
      if (isParent && this.record.attributes.parent_id.trim() == "")
        this.content = "Master";
      else if(isParent && this.record.attributes.parent_id.trim() !== "")
        this.content = "Parent";
    }
    return isParent;
  }

  showHierarchy(marked: string): void {
    if(this.column) {
      const modal = this.modalService.open(AccountPopupComponent, {size: 'xl', scrollable: true});
      modal.componentInstance.marked = marked;
      modal.componentInstance.parent = this.record;
      modal.componentInstance.accounts = this.subAccounts;
      modal.componentInstance.accountName = this.record.attributes.name;
    }
    else {
      // slide to subpanel
      window.scrollTo(0, document.body.scrollHeight);

    }
  }
}
