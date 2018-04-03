import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FeedbackdataService } from '../shared/feedbackdata.service';
import { Feedbackmodel } from '../shared/feedbackmodel';

@Component({
  selector: 'app-feedback',
  templateUrl: './feedback.component.html',
  styleUrls: ['./feedback.component.css']
})
export class FeedbackComponent implements OnInit {

allfeedback:Feedbackmodel[]=[];
  constructor(public _feedback:FeedbackdataService,public _router:Router) { }

  ngOnInit() {
    this._feedback.getAllfeedback().subscribe(

      (data:Feedbackmodel[])=>{
        this.allfeedback=data;
      },
      function(error){
        alert(error);
      },
      function(){
        console.log('feedback aai gayu');
      }
      
    );
  }
   deletefeedback(item:Feedbackmodel){
this._feedback.deletefeedback(item.f_id).subscribe(
  (data:any)=>{

    this.allfeedback.splice(this.allfeedback.indexOf(item),1);
    alert("deleted");

  },
  function(error){
    alert(error);
  }
);
}
updatefeedback(item:Feedbackmodel){

this._router.navigate(['/editfeedback',item.f_id]);

}

}
