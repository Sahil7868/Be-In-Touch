import { Component, OnInit } from '@angular/core';
import { Router,ActivatedRoute } from '@angular/router';
import { CardataService } from '../shared/cardata.service';
import { Carmodel } from '../shared/carmodel';
import { Subscription } from 'rxjs/Rx';

@Component({
  selector: 'app-updatecar',
  templateUrl: './updatecar.component.html',
  styleUrls: ['./updatecar.component.css']
})
export class UpdatecarComponent implements OnInit {

   public _subscription:Subscription;
  public car:Carmodel[]=[];
public car_id:number;
private carname:string;
private fktypeid:number;
private carimage1:string;
private cardetails:string;
private carnum:number;
private carimage2:string;
private carimage3:string;
private capacity:number;
private fkdriverid:number;

  constructor(private _cardata:CardataService,private _router:Router,private _acrouter:ActivatedRoute) { }

  ngOnInit() {
      this._subscription=this._acrouter.params.subscribe(

      (params:any)=>{
          this.car_id=params["id"];

      }
    );

    this._cardata.getcarById(this.car_id).subscribe(


        (data:Carmodel[])=>{

            this.car=data;
            this.carname=this.car[0].car_name;
            this.fktypeid=this.car[0].fk_type_id;
            this.carimage1=this.car[0].car_image_1;
            this.carnum=this.car[0].car_num;
            this.cardetails=this.car[0].car_details;
            this.carimage2=this.car[0].car_image_2;
            this.carimage3=this.car[0].car_image_3;
            this.capacity=this.car[0].capacity;
            this.fkdriverid=this.car[0].fk_driver_id;

            
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
 updatecar()
  {
     this._cardata.updatecar(new Carmodel(this.car_id,this.carname,this.fktypeid,this.carimage1,this.cardetails,this.carnum,this.carimage2,this.carimage3,this.capacity,this.fkdriverid)).subscribe(

       (data:any)=>
       {
         this._router.navigate(['/allcar']);
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
