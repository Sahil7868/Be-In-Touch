import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { CitydataService } from '../shared/citydata.service';
import { Citymodel } from '../shared/citymodel';

@Component({
  selector: 'app-city',
  templateUrl: './city.component.html',
  styleUrls: ['./city.component.css']
})
export class CityComponent implements OnInit {

allcity:Citymodel[]=[];
  constructor(public _city:CitydataService,public _router:Router) { }

  ngOnInit() {
       this._city.getAllcity().subscribe(

      (data:Citymodel[])=>{
        this.allcity=data;
      },
      function(error){
        alert(error);
      },
      function(){
        console.log('city aai gai');
      }
      
    );
  }
  deletecity(item:Citymodel){
this._city.deletecity(item.city_id).subscribe(
  (data:any)=>{

    this.allcity.splice(this.allcity.indexOf(item),1);
    alert("deleted");

  },
  function(error){
    alert(error);
  }
);
}
updatecity(item:Citymodel){

this._router.navigate(['/updatecity',item.city_id]);

}

}
