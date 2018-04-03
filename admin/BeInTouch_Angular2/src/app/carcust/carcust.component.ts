import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { CarcustdataService } from '../shared/carcustdata.service';
import { Carcustmodel } from '../shared/carcustmodel';

@Component({
  selector: 'app-carcust',
  templateUrl: './carcust.component.html',
  styleUrls: ['./carcust.component.css']
})
export class CarcustComponent implements OnInit {

  allcarcust:Carcustmodel[]=[];

  constructor(public _carcust:CarcustdataService,public _router:Router) { }

  ngOnInit() {
     this._carcust.getAllcarcust().subscribe(

      (data:Carcustmodel[])=>{
        this.allcarcust=data;
      },
      function(error){
        alert(error);
      },
      function(){
        console.log('carcust aai gayu');
      }
      
    );
  }

  deletecarcust(item:Carcustmodel){
this._carcust.deletecarcust(item.cust_id).subscribe(
  (data:any)=>{

    this.allcarcust.splice(this.allcarcust.indexOf(item),1);
    alert("deleted");

  },
  function(error){
    alert(error);
  }
);
}
updatecarcust(item:Carcustmodel){

this._router.navigate(['/editcarcust',item.cust_id]);

}
}
