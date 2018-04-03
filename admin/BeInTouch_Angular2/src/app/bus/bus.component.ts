import { Component, OnInit } from '@angular/core';
import { BusdataService } from '../shared/busdata.service';
import { Busmodel } from '../shared/busmodel';
import { Busdriverjoinmodel } from '../shared/busdriverjoinmodel';
import { Router } from '@angular/router';
@Component({
  selector: 'app-bus',
  templateUrl: './bus.component.html',
  styleUrls: ['./bus.component.css']
})
export class BusComponent implements OnInit {

   allbus:Busdriverjoinmodel[]=[];

  constructor(public _bus:BusdataService,public _router:Router) { }

  ngOnInit() {
    this._bus.getAllbusdriverjoin().subscribe(

      (data:Busdriverjoinmodel[])=>{
         console.log('join aai gai');
        this.allbus=data;
      },
      function(error){
        alert('cant show');
      },
      function(){
        console.log('finished');
      }
    );  
  }
  updatebus(item:Busdriverjoinmodel)
  {
    this._router.navigate(['/updatebus',item.bus_id]);
  }
  deletebus(item:Busdriverjoinmodel){

  this._bus.deletebus(item.bus_id).subscribe(

    (data:any)=>{
      this.allbus.splice(this.allbus.indexOf(item),1);
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
