import { Injectable } from '@angular/core';
import { Busmodel } from './busmodel';
import { Http,Response,RequestOptions,Headers } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class BusdataService {
private url:string="http://localhost:3000/bus/";
private url1:string="http://localhost:3000/busdriverjoin/";
  constructor(public _http:Http) { }

  getAllbus(){

return this._http.get(this.url).map((res:Response)=>res.json());
}
getbusById(id:number){

return this._http.get(this.url+id).map((res:Response)=>res.json());
}

  getAllbusdriverjoin(){

    return this._http.get(this.url1).map((res:Response)=>res.json());
  }
addbus(item:Busmodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}
deletebus(id:number){

let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.delete(this.url+id,req).map((res:Response)=>res.json());
}
updatebus(item:Busmodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.put(this.url+item.bus_id,body,req).map((res:Response)=>res.json());
}


}
