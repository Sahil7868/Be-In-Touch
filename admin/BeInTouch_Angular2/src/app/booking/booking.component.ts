import { Component, OnInit } from '@angular/core';
import { BookingdataService } from '../shared/bookingdata.service';
import { Bookingmodel } from '../shared/bookingmodel';

@Component({
  selector: 'app-booking',
  templateUrl: './booking.component.html',
  styleUrls: ['./booking.component.css']
})
export class BookingComponent implements OnInit {
  
  allbook:Bookingmodel[]=[];

  constructor(public _book:BookingdataService) { }

  ngOnInit() {
     this._book.getAllbook().subscribe(

      (data:Bookingmodel[])=>{
        this.allbook=data;
      },
      function(error){
        alert('cant show');
      },
      function(){
        console.log('finished');
      }
    );  
  }

deletebook(item:Bookingmodel){

  this._book.deletebook(item.book_id).subscribe(

    (data:any)=>{
      this.allbook.splice(this.allbook.indexOf(item),1);
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
