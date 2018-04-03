import { Injectable } from '@angular/core';
import { Feedbackmodel } from './feedbackmodel';
import { Http,Response,Headers,RequestOptions } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class FeedbackdataService {

  private url:string="http://localhost:3000/feedback/";

  constructor(private _http:Http) { }


getAllfeedback(){
  return this._http.get(this.url).map((res:Response)=>res.json());
}

getfeedbackById(id:number){
  return this._http.get(this.url+id).map((res:Response)=>res.json());
}

addfeedback(item:Feedbackmodel){
  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.post(this.url,body,requestoption).map((res:Response)=>res.json());
}

deletefeedback(id:number){
   let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.delete(this.url+id,requestoption).map((res:Response)=>res.json());
}
updatefeedback(item:Feedbackmodel){

  let body=JSON.stringify(item);
  let headers=new Headers({'Content-Type':'application/json'});
  let requestoption=new RequestOptions({headers:headers});
  return this._http.put(this.url+item.f_id,body,requestoption).map((res:Response)=>res.json());
}

}
