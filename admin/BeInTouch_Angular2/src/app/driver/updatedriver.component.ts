import { Component, OnInit } from '@angular/core';
import { Router,ActivatedRoute } from '@angular/router';
import { DriverdataService } from '../shared/driverdata.service';
import { Drivermodel } from '../shared/drivermodel';
import { Subscription } from 'rxjs/Rx';

@Component({
  selector: 'app-updatedriver',
  templateUrl: './updatedriver.component.html',
  styleUrls: ['./updatedriver.component.css']
})
export class UpdatedriverComponent implements OnInit {

  public _subscription:Subscription;
  public car:Drivermodel[]=[];
public driver_id:number;
private title:string;
private no:number;
private adi:string;

  constructor(private _cartypedata:DriverdataService,private _router:Router,private _acrouter:ActivatedRoute) { }

  ngOnInit() {

      this._subscription=this._acrouter.params.subscribe(

      (params:any)=>{
          this.driver_id=params["id"];

      }
    );
    this._cartypedata.getdriverById(this.driver_id).subscribe(


        (data:Drivermodel[])=>{

            this.car=data;
            this.title=this.car[0].name;
            this.no=this.car[0].mobile_num;
            this.adi=this.car[0].address;
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
   updatedriver()
  {
     this._cartypedata.updatedriver(new Drivermodel(this.driver_id,this.title,this.no,this.adi,null)).subscribe(

       (data:any)=>
       {
         this._router.navigate(['/alldriver']);
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
