import { Injectable } from '@angular/core';
import { Citymodel } from './citymodel';
import { Http,Response,Headers,RequestOptions } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class CitydataService {

private url:string="http://localhost:3000/city/";

  constructor(private _http:Http) { }

getAllcity(){
  return this._http.get(this.url).map((res:Response)=>res.json());
}

getcityById(id:number){
  return this._http.get(this.url+id).map((res:Response)=>res.json());
}

addcity(item:Citymodel){
  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let req=new RequestOptions({headers:headers});
  return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}

deletecity(id:number){
   let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.delete(this.url+id,requestoption).map((res:Response)=>res.json());
}

updatecity(item:Citymodel){

  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.put(this.url+item.city_id,body,requestoption).map((res:Response)=>res.json());
}
}
