/*import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-task',
  templateUrl: './task.component.html',
  styleUrls: ['./task.component.css']
})
export class TaskComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}*/

import { Component, OnInit } from '@angular/core';
import { Task } from '../shared/task';
import { TasksService } from '../shared/tasks.service';
@Component({
  selector: 'app-task',
  templateUrl: './task.component.html',
  styleUrls: ['./task.component.css']
})
export class TaskComponent implements OnInit {

allTask:Task[]=[];
  constructor(private _task:TasksService) { }

  ngOnInit() {
     this._task.getAllTask().subscribe(
       (data:Task[])=>{this.allTask=data;
  
    }
    );
  }


deleteTask(item:Task)
  {
    this._task.deleteTask(item.Id).subscribe(

      (data:any)=>{
        
        this.allTask.splice(this.allTask.indexOf(item),1); 
      },
      function(error){console.log(error);}
  ,function(){console.log('delete done');}
    );
  }

}

