import { Injectable } from '@angular/core';
import { Bookingmodel } from './bookingmodel';
import { Http,Response,RequestOptions,Headers } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class BookingdataService {

private url:string="http://localhost:3000/book/";
  constructor(public _http:Http) { }

  getAllbook(){

return this._http.get(this.url).map((res:Response)=>res.json());
}
addbook(item:Bookingmodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}
deletebook(id:number){

let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.delete(this.url+id,req).map((res:Response)=>res.json());
}
updatebook(item:Bookingmodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.put(this.url+item.book_id,body,req).map((res:Response)=>res.json());
}


}
