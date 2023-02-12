import {Component, Input, OnDestroy, OnInit} from '@angular/core';
import {ButtonInterface, ModalCloseFeedBack, Record} from 'common';
import {NgbActiveModal} from "@ng-bootstrap/ng-bootstrap";
import {AccountRow} from "./accounts.model";

var ACCOUNTS_DATA: AccountRow[] = [];

@Component({
  selector: 'scrm-account-popup',
  templateUrl: './account-popup.component.html',
  styleUrls: ['./account-popup.component.scss']
})
export class AccountPopupComponent implements OnInit, OnDestroy {

  @Input("accounts") accounts: any[];
  @Input("parent") parent: Record;
  @Input("accountName") accountName: string;
  titleKey: string;
  closeButton: ButtonInterface;
  keys: string[] = ['name', 'account_base_type', 'city', 'country', 'b2b_account', 'iata'];
  displayedColumns: object = {name: 'Name', account_base_type: 'Base Type', city: 'City', country: 'Country', b2b_account: 'Account', iata: 'IATA'};
  dataSource: AccountRow[];

  constructor(
      public activeModal: NgbActiveModal
  ) { }

  ngOnInit(): void {
    this.closeButton = {
      klass: ['btn', 'btn-outline-light', 'btn-sm'],
      onClick: (): void => {
        this.activeModal.close({
          type: 'close-button'
        } as ModalCloseFeedBack);
      }
    } as ButtonInterface;
    this.titleKey = "Close";
    console.log(this.accounts);
    ACCOUNTS_DATA = this.makeDataSource(this.accounts);
    this.dataSource = ACCOUNTS_DATA;
    console.log(this.dataSource);
  }

  makeDataSource(accounts): any {
    let arr: AccountRow[] = [];
    accounts.forEach((account) => {
      let obj = {
        id: account['id'],
        name: account['name'],
        account_base_type: account['account_base_type'],
        city: account['billing_address_city'],
        country: account['billing_address_country'],
        b2b_account: account['b2b_account_no'],
        iata: account['iata'],
        ind: account['ind']
      };
      arr.push(obj);
    });
    return arr;
  }

  ngOnDestroy(): void {
    ACCOUNTS_DATA = [];
  }
}
