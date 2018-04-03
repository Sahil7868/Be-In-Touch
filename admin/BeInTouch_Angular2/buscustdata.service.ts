import { Injectable } from '@angular/core';
import { Buscustmodel } from './buscustmodel';
import { Http,Response,RequestOptions,Headers } from '@angular/http';
import 'rxjs/Rx';
@Injectable()
export class BuscustdataService {

private url:string="http://localhost:3000/buscust/";
  constructor(public _http:Http) { }


  getAllbuscust(){

return this._http.get(this.url).map((res:Response)=>res.json());
}
addbuscust(item:Buscustmodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}
deletebuscust(id:number){

let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.delete(this.url+id,req).map((res:Response)=>res.json());
}
updatebuscust(item:Buscustmodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.put(this.url+item.cust_id,body,req).map((res:Response)=>res.json());
}


}
