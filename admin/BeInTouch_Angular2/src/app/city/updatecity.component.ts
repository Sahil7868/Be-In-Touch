import { Component, OnInit } from '@angular/core';
import { Router,ActivatedRoute } from '@angular/router';
import { CitydataService } from '../shared/citydata.service';
import { Citymodel } from '../shared/citymodel';
import { Subscription } from 'rxjs/Rx';

@Component({
  selector: 'app-updatecity',
  templateUrl: './updatecity.component.html',
  styleUrls: ['./updatecity.component.css']
})
export class UpdatecityComponent implements OnInit {

   public _subscription:Subscription;
   public city:Citymodel[]=[];
   public city_id:number;
private city_name:string;

  constructor(private _citydata:CitydataService,private _router:Router,private _acrouter:ActivatedRoute) { }

  ngOnInit() {
    this._subscription=this._acrouter.params.subscribe(

      (params:any)=>{
          this.city_id=params["id"];
  }
    );

    this._citydata.getcityById(this.city_id).subscribe(


        (data:Citymodel[])=>{

            this.city=data;
            this.city_name=this.city[0].city_name;
                        
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
 updatecity()
  {
     this._citydata.updatecity(new Citymodel(this.city_id,this.city_name)).subscribe(

       (data:any)=>
       {
         this._router.navigate(['/allcity']);
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
