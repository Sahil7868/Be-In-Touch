import { Injectable } from '@angular/core';
import { Usermodel } from './usermodel';
import { Http,Response,RequestOptions,Headers } from '@angular/http';
import 'rxjs/Rx';
@Injectable()
export class UserdataService {

  private url:string="http://localhost:3000/user/";

  constructor(public _http:Http) { }


  getAlluser(){

return this._http.get(this.url).map((res:Response)=>res.json());
}
adduser(item:Usermodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}
deleteuser(id:string){

let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.delete(this.url+id,req).map((res:Response)=>res.json());
}
updateuser(item:Usermodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.put(this.url+item.email_id,body,req).map((res:Response)=>res.json());
}


}
