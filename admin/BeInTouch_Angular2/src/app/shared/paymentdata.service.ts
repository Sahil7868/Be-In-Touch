import { Injectable } from '@angular/core';
import { Paymentmodel } from './Paymentmodel';
import { Http,Response,Headers,RequestOptions } from '@angular/http';
import 'rxjs/Rx';


@Injectable()
export class PaymentdataService {

 private url:string="http://localhost:3000/pay/";

  constructor(private _http:Http) { }

  getAllpayment(){
  return this._http.get(this.url).map((res:Response)=>res.json());
}

getpaymentById(id:number){
  return this._http.get(this.url+id).map((res:Response)=>res.json());
}

addpayment(item:Paymentmodel){
  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.post(this.url,body,requestoption).map((res:Response)=>res.json());
}

deletepayment(id:number){
   let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.delete(this.url+id,requestoption).map((res:Response)=>res.json());
}
updatepayment(item:Paymentmodel){

  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.put(this.url+item.pay_id,body,requestoption).map((res:Response)=>res.json());
}

}
