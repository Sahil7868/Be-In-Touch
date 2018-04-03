import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { CardataService } from '../shared/cardata.service';
import { Carmodel } from '../shared/carmodel';

@Component({
  selector: 'app-car',
  templateUrl: './car.component.html',
  styleUrls: ['./car.component.css']
})
export class CarComponent implements OnInit {

  allcar:Carmodel[]=[];

  constructor(public _car:CardataService,public _router:Router) { }

  ngOnInit() {

        this._car.getAllcar().subscribe(

      (data:Carmodel[])=>{
        this.allcar=data;
      },
      function(error){
        alert(error);
      },
      function(){
        console.log('car aai gai');
      }
      
    );
  }

  deletecar(item:Carmodel){
this._car.deletecar(item.car_id).subscribe(
  (data:any)=>{

    this.allcar.splice(this.allcar.indexOf(item),1);
    alert("deleted");

  },
  function(error){
    alert(error);
  }
);
}
updatecar(item:Carmodel){

this._router.navigate(['/updatecar',item.car_id]);

}
}
