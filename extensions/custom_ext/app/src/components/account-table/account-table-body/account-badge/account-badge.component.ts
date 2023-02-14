import {Component, Input, OnInit} from '@angular/core';
import {ColumnDefinition, Record} from 'common';
import {HttpClient, HttpHeaders} from "@angular/common/http";
import {NgbModal} from "@ng-bootstrap/ng-bootstrap";
import {AccountPopupComponent} from "../../../../views/account-list-view/account-popup/account-popup.component";

@Component({
  selector: 'scrm-account-badge',
  templateUrl: './account-badge.component.html',
  styleUrls: ['./account-badge.component.scss']
})
export class AccountBadgeComponent implements OnInit {

  @Input("record") record: Record;
  @Input("column") column: ColumnDefinition = null;
  @Input("fontSize") fontSize: number = 10;
  @Input("height") height: number = 20;
  content: string;
  isNameColumn: boolean;
  isParent: boolean;
  subAccounts: any[];

  constructor(
      private http: HttpClient,
      protected modalService: NgbModal,
  ) { }

  ngOnInit(): void {
    (async() => {
      if(this.column)
        this.isNameColumn = this.checkNameColumn();
      else
        this.isNameColumn = true;
      this.isParent = await this.checkIfParent();
    })();
  }

  checkNameColumn(): boolean {
    return this.column.name.toLowerCase() === "name";
  }

  checkIfParent = async(): Promise<boolean> => {
    let isParent = false;
    if(this.isNameColumn) {

      // get sub-accounts array
      let headers = new HttpHeaders();
      headers.set('Content-Type', 'application/json; charset=utf-8');
      this.subAccounts = await new Promise((resolve, reject) => {
        this.http.get(location.origin + location.pathname +
            'legacy/index.php?entryPoint=getSubAccounts&record=' +
            this.record.id, {headers: headers, responseType: 'text'})
            .subscribe(data => {
              resolve(JSON.parse(data));
            }, error => reject(error));
      });

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

  showHierarchy(): void {
    if(this.column) {
      const modal = this.modalService.open(AccountPopupComponent, {size: 'xl', scrollable: true});
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
