import { Injectable } from '@angular/core';
import { Cartypemodel } from './cartypemodel';
import { Http,Response,RequestOptions,Headers } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class CartypedataService {

private url:string="http://localhost:3000/cartype/";

  

  constructor(public _http:Http) { }


getAllcartype(){

return this._http.get(this.url).map((res:Response)=>res.json());
}
getcartypeById(id:number){

return this._http.get(this.url+id).map((res:Response)=>res.json());
}
addcartype(item:Cartypemodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}
deletecartype(id:number){

let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.delete(this.url+id,req).map((res:Response)=>res.json());
}
updatecartype(item:Cartypemodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.put(this.url+item.type_id,body,req).map((res:Response)=>res.json());
}

}
