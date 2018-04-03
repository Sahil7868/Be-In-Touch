import { Injectable } from '@angular/core';
import { Carmodel } from './carmodel';
import { Http,Response,Headers,RequestOptions } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class CardataService {

  private url:string="http://localhost:3000/car/";

  constructor(private _http:Http) { }


getAllcar(){
  return this._http.get(this.url).map((res:Response)=>res.json());
}



getcarById(id:number){
  return this._http.get(this.url+id).map((res:Response)=>res.json());
}

addcar(item:Carmodel){
  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let req=new RequestOptions({headers:headers});
  return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}

deletecar(id:number){
   let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.delete(this.url+id,requestoption).map((res:Response)=>res.json());
}

updatecar(item:Carmodel){

  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.put(this.url+item.car_id,body,requestoption).map((res:Response)=>res.json());
}

}
