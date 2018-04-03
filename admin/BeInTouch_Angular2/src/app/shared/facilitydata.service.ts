import { Injectable } from '@angular/core';
import { Http,Response,RequestOptions,Headers } from '@angular/http';
import 'rxjs/Rx';
import { Facilitymodel } from './facilitymodel';

@Injectable()
export class FacilitydataService {

private url:string="http://localhost:3000/facility/";

  constructor(public _http:Http) { }

getAllfac(){

return this._http.get(this.url).map((res:Response)=>res.json());
}
getfacById(id:number){

return this._http.get(this.url+id).map((res:Response)=>res.json());
}
addfac(item:Facilitymodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}
deletefac(id:number){

let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.delete(this.url+id,req).map((res:Response)=>res.json());
}
updatefac(item:Facilitymodel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.put(this.url+item.facility_id,body,req).map((res:Response)=>res.json());
}

}

