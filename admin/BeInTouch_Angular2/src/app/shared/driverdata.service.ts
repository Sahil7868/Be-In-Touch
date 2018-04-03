import { Injectable } from '@angular/core';
import { Drivermodel } from './drivermodel';
import { Http,Response,RequestOptions,Headers } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class DriverdataService {

  private url:string="http://localhost:3000/driver/";

  constructor(public _http:Http) { }

  getAlldriver(){

return this._http.get(this.url).map((res:Response)=>res.json());
}
getdriverById(id:number){

return this._http.get(this.url+id).map((res:Response)=>res.json());
}
adddriver(item:Drivermodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}
deletedriver(id:number){

let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.delete(this.url+id,req).map((res:Response)=>res.json());
}
updatedriver(item:Drivermodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.put(this.url+item.driver_id,body,req).map((res:Response)=>res.json());
}


}
