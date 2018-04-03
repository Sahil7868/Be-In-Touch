import { Component, OnInit } from '@angular/core';
import {  CartypedataService} from '../shared/cartypedata.service';
import { Cartypemodel } from '../shared/cartypemodel';
import { Router } from '@angular/router';

@Component({
  selector: 'app-cartype',
  templateUrl: './cartype.component.html',
  styleUrls: ['./cartype.component.css']
})
export class CartypeComponent implements OnInit {

  allcartype:Cartypemodel[]=[];

  constructor(public _cartype:CartypedataService,private _router:Router) { }

  ngOnInit() {

    this._cartype.getAllcartype().subscribe(

      (data:Cartypemodel[])=>{
        this.allcartype=data;
        
      },
      function(error){
        alert('cant show');
      },
      function(){
        console.log('finished');
      }
    );  
  }
  updatecartype(item:Cartypemodel)
  {
    this._router.navigate(['/updatecartype',item.type_id]);
  }
deleteCartype(item:Cartypemodel){

  this._cartype.deletecartype(item.type_id).subscribe(

    (data:any)=>{
      this.allcartype.splice(this.allcartype.indexOf(item),1);
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




    
  

}
