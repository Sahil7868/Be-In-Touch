/*import { Component, OnInit } from '@angular/core';
import { Buscustmodel } from '../shared/buscustmodel';
//import { BuscustdataService } from '../shared/buscustdata.service';

@Component({
  selector: 'app-buscust',
  templateUrl: './buscust.component.html',
  styleUrls: ['./buscust.component.css']
})
export class BuscustComponent implements OnInit {

  allbuscust:Buscustmodel[]=[];

  constructor(public _cust:BuscustdataService) { }

  ngOnInit() {


     this._cust.getAllbuscust().subscribe(

      (data:Buscustmodel[])=>{
        this.allbuscust=data;
      },
      function(error){
        alert('cant show');
      },
      function(){
        console.log('finished');
      }
    );
  }

  deletebuscust(item:Buscustmodel){

  this._cust.deletebuscust(item.cust_id).subscribe(

    (data:any)=>{
      this.allbuscust.splice(this.allbuscust.indexOf(item),1);
      alert('deleted');
    },
      function(error){
        alert('vaat lagshe');
      },
      function(){
        console.log('badhu patyu');
      }
  );

}


}*/
