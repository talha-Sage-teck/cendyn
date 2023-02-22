import {AfterViewInit, Component, Input, OnDestroy, OnInit} from '@angular/core';
import {ButtonInterface, ModalCloseFeedBack, Record} from 'common';
import {NgbActiveModal} from "@ng-bootstrap/ng-bootstrap";
import {AccountRow} from "./accounts.model";

@Component({
  selector: 'scrm-account-popup',
  templateUrl: './account-popup.component.html',
  styleUrls: ['./account-popup.component.scss']
})
export class AccountPopupComponent implements OnInit, AfterViewInit, OnDestroy {

  @Input("accounts") accounts: any[];
  @Input("parent") parent: Record;
  @Input("accountName") accountName: string;
  @Input("marked") marked: string = "";
  titleKey: string;
  closeButton: ButtonInterface;
  keys: string[] = ['name', 'account_base_type', 'city', 'country', 'b2b_account', 'iata'];
  displayedColumns: object = {name: 'Name', account_base_type: 'Base Type', city: 'City', country: 'Country', b2b_account: 'Account', iata: 'IATA'};
  dataSource$: Promise<AccountRow[]>;
  loading: boolean = true;
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
  }

  ngAfterViewInit(): void {
    this.dataSource$ = this.makeDataSource(this.accounts);
  }

  decodeHtml(html) {
    let txt = document.createElement("textarea");
    txt.innerHTML = html;
    return txt.value;
  }

  makeDataSource = async(accounts): Promise<AccountRow[]> => {
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
        ind: account['ind'],
        marked: account['marked']
      };
      arr.push(obj);
    });
    this.loading = false;
    return arr;
  }

  ngOnDestroy(): void {
    this.dataSource$ = null;
  }
}
