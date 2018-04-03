import { Component, OnInit } from '@angular/core';
import { Router,ActivatedRoute } from '@angular/router';
import {  CartypedataService } from '../shared/cartypedata.service';
import { Cartypemodel } from '../shared/cartypemodel';
import { Subscription } from 'rxjs/Rx';


@Component({
  selector: 'app-updatecartype',
  templateUrl: './updatecartype.component.html',
  styleUrls: ['./updatecartype.component.css']
})
export class UpdatecartypeComponent implements OnInit {

  public _subscription:Subscription;
  public car:Cartypemodel[]=[];
  public type_id:number;
  public title:string;

  constructor(private _cartypedata:CartypedataService,private _router:Router,private _acrouter:ActivatedRoute) { }

  ngOnInit() {

    this._subscription=this._acrouter.params.subscribe(

      (params:any)=>{
          this.type_id=params["id"];

      }
    );
    this._cartypedata.getcartypeById(this.type_id).subscribe(


        (data:Cartypemodel[])=>{

            this.car=data;
           // this.title=this.car[0];
        },
        function(error)
        {

        },
        function()
        {
          console.log("done");
        }

    );
  }
  updatecartype()
  {
     this._cartypedata.updatecartype(new Cartypemodel(this.type_id,this.title)).subscribe(

       (data:any)=>
       {
         this._router.navigate(['/allcartype']);
       },
        function(error)
        {

        },
        function()
        {
          console.log("edited");
        }


     );
  }

}
