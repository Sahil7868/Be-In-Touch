import { Injectable } from '@angular/core';
import { Cancelmodel } from './cancelmodel';
import { Http,Response,Headers,RequestOptions } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class CanceldataService {

  private url:string="http://localhost:3000/cancel/";
 

  constructor(private _http:Http) { }

  getAllcancel(){
  return this._http.get(this.url).map((res:Response)=>res.json());
}


getcancelById(id:number){
  return this._http.get(this.url+id).map((res:Response)=>res.json());
}

addcancel(item:Cancelmodel){
  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.post(this.url,body,requestoption).map((res:Response)=>res.json());
}


deletecancel(id:number){
   let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.delete(this.url+id,requestoption).map((res:Response)=>res.json());
}

updatecancel(item:Cancelmodel){

  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.put(this.url+item.cancel_id,body,requestoption).map((res:Response)=>res.json());
}

}
