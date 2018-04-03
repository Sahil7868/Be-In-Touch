import { Component, OnInit } from '@angular/core';
import { Task } from '../shared/task';
import { TasksService } from '../shared/tasks.service';
@Component({
  selector: 'app-addtask',
  templateUrl: './addtask.component.html',
  styleUrls: ['./addtask.component.css']
})
export class AddtaskComponent implements OnInit {


Id:string='';
Title:string='';
Status:string='';

  constructor(private _x:TasksService) { }

  ngOnInit() {
  }

  addtask()
  {
    this._x.addtask(new Task(this.Id,this.Title,this.Status))
    .subscribe(
(data:any)=>{console.log(data);
  },
  function(error){},
  function(){
    alert("added");
  }
    );
  }

}


/*addtask()
{
  this._task.addtask(new Task(this.Id,this.Title,this.Status)).subscribe((data:any)=>{console.log(data); },
  function(error){},
  function(){
    alert("added");
  }
  );
}
}
*/