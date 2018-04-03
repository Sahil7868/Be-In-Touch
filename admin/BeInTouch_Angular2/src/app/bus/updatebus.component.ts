import { Component, OnInit } from '@angular/core';
import { Router,ActivatedRoute } from '@angular/router';
import { Busmodel } from '../shared/busmodel';
import { BusdataService } from '../shared/busdata.service';
import { Subscription } from 'rxjs/Rx';
import { Busdriverjoinmodel } from '../shared/busdriverjoinmodel';
import {FacilitydataService} from '../shared/facilitydata.service'
import { Drivermodel } from '../shared/drivermodel';
import { Facilitymodel } from '../shared/facilitymodel';
import { DriverdataService } from '../shared/driverdata.service';


@Component({
  selector: 'app-updatebus',
  templateUrl: './updatebus.component.html',
  styleUrls: ['./updatebus.component.css']
})
export class UpdatebusComponent implements OnInit {
  
  public _subscription:Subscription;
   alldriver:Drivermodel[]=[];
   allfacility:Facilitymodel[]=[];
  private bus_id:number;
  private title:string;
   private faci:string;
  private bus_detail:string;
  private fk_driver_id:number;
  private capacity:number;
  private bn:string;

  constructor(private _facility:FacilitydataService,private _bus:BusdataService,private _router:Router,private _acrouter:ActivatedRoute,public _driver:DriverdataService) { }

  ngOnInit() {
     this._subscription=this._acrouter.params.subscribe(

      (params:any)=>{
          this.bus_id=params["id"];

      }
    );
   this._driver.getAlldriver().subscribe(
     (data:Drivermodel[])=>{
       this.alldriver=data;
    }
   );
     this._facility.getAllfac().subscribe(
     (data:Facilitymodel[])=>{
       this.allfacility=data;
    }
   );

    this._bus.getbusById(this.bus_id).subscribe(


        (data:Busmodel[])=>{

            
            this.title=data[0].bus_name;
            this.faci=data[0].fk_facility_id; 
            this.bus_detail=data[0].bus_detail;
            this.fk_driver_id=data[0].fk_driver_id;
            this.bn=data[0].bus_num;
            this.capacity=data[0].capacity;
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
   updatebus()
  {
     this._bus.updatebus(new Busmodel(this.bus_id,this.capacity,this.bn,this.title,this.faci,this.bus_detail,this.fk_driver_id))
     .subscribe(

       (data:any)=>
       {
          console.log(data); 
          alert('updated');
         this._router.navigate(['/allbus']);
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
