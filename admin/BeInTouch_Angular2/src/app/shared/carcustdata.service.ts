import { Injectable } from '@angular/core';
import { Carcustmodel } from './carcustmodel';
import { Http,Response,Headers,RequestOptions } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class CarcustdataService {

private url:string="http://localhost:3000/carcustomer/";

constructor(private _http:Http) { }

getAllcarcust(){
  return this._http.get(this.url).map((res:Response)=>res.json());
}

getcarcustById(id:number){
  return this._http.get(this.url+id).map((res:Response)=>res.json());
}


addcarcust(item:Carcustmodel){
  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.post(this.url,body,requestoption).map((res:Response)=>res.json());
}

deletecarcust(id:number){
   let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.delete(this.url+id,requestoption).map((res:Response)=>res.json());
}

updatecarcust(item:Carcustmodel){

  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.put(this.url+item.cust_id,body,requestoption).map((res:Response)=>res.json());
}
}
