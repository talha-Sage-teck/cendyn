import {AfterViewInit, ChangeDetectorRef, Component, Input, OnDestroy, OnInit} from '@angular/core';
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
  keys: string[] = ['name', 'account_base_type', 'city', 'country', 'street', 'iata'];
  displayedColumns: object = {name: 'Name', account_base_type: 'Base Type', city: 'City', country: 'Country', street: 'Street', iata: 'IATA'};
  dataSource$: Promise<AccountRow[]>;
  loading: boolean = true;
  showCount: number = 500;

  constructor(
      public activeModal: NgbActiveModal,
      // private changeDetector: ChangeDetectorRef
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

  addItems(number: number) {
    setTimeout(() => this.loading = true);
    if(number > 0)
      this.showCount += number;
    else
      this.showCount = -1;
  }

  onContentPrinted() {
    setTimeout(() => this.loading = false);
//    this.changeDetector.detectChanges();
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
        street: account['billing_address_street'],
        iata: account['iata'],
        ind: account['ind'],
        marked: account['marked']
      };
      arr.push(obj);
    });
    setTimeout(() => this.loading = false);
    return arr;
  }

  ngOnDestroy(): void {
    this.dataSource$ = null;
  }
}
