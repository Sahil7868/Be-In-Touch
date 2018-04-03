import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { CanceldataService } from '../shared/canceldata.service';
import { Cancelmodel } from '../shared/cancelmodel';

@Component({
  selector: 'app-cancel',
  templateUrl: './cancel.component.html',
  styleUrls: ['./cancel.component.css']
})
export class CancelComponent implements OnInit {

  allcancel:Cancelmodel[]=[];

  constructor(public _cancel:CanceldataService,public _router:Router) { }

  ngOnInit() {

            this._cancel.getAllcancel().subscribe(

      (data:Cancelmodel[])=>{
        this.allcancel=data;
      },
      function(error){
        alert(error);
      },
      function(){
        console.log('cancel aai gai');
      }
      
    );
  }

  deletecancel(item:Cancelmodel){
this._cancel.deletecancel(item.cancel_id).subscribe(
  (data:any)=>{

    this.allcancel.splice(this.allcancel.indexOf(item),1);
    alert("deleted");

  },
  function(error){
    alert(error);
  }
);
}
updatecar(item:Cancelmodel){

this._router.navigate(['/editcancel',item.cancel_id]);

}
}
