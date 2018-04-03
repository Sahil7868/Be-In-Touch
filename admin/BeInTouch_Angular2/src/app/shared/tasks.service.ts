import { Injectable } from '@angular/core';
import { Http,Response,Headers,RequestOptions } from '@angular/http';
import { Task } from './task';
import 'rxjs/Rx';

@Injectable()
export class TasksService {

private url:string="http://localhost:3000/tasks";
  constructor(private _http:Http) { }

  getAllTask()
  {
return this._http.get(this.url).map((res:Response)=>res.json());

//return this._http.get("http://localhost:3000/tasks").map((res:Response)=>res.json());
  }

addtask(item:Task)
{
  let body=JSON.stringify(item);
  let headers=new Headers({'content-type':'application/json'});
  let req=new RequestOptions({headers:headers});
  return this._http.post(this.url,body,req).map((res:Response)=>res.json());
}


deleteTask(Id:string)
{

  let headers=new Headers({'Content-Type':'application/json'});
  let req=new RequestOptions({headers:headers});
  return this._http.delete(this.url+Id,req);

}
}

