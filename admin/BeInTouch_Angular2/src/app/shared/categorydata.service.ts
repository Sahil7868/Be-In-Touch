import { Injectable } from '@angular/core';
import { CategoryModel } from './category-model';
import { Http,Response,RequestOptions,Headers } from '@angular/http';
import 'rxjs/Rx';
@Injectable()
export class CategorydataService {

private url:string="http://localhost:3000/cat/";
  constructor(public _http:Http) { }

getAllCategory(){

return this._http.get(this.url).map((res:Response)=>res.json());
}
addCategory(item:CategoryModel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}
deleteCategory(id:number){

let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.delete(this.url+id,req).map((res:Response)=>res.json());
}
updateCategory(item:CategoryModel){

let body=JSON.stringify(item);
let header=new Headers({'Content-Type':'application/json'});
let req=new RequestOptions({headers:header});
return this._http.put(this.url+item.cat_id,body,req).map((res:Response)=>res.json());
}
}
