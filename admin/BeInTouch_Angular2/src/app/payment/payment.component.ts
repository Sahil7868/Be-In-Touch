import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { PaymentdataService } from '../shared/paymentdata.service';
import { Paymentmodel } from '../shared/paymentmodel';

@Component({
  selector: 'app-payment',
  templateUrl: './payment.component.html',
  styleUrls: ['./payment.component.css']
})
export class PaymentComponent implements OnInit {

allpayment:Paymentmodel[]=[];
  constructor(public _payment:PaymentdataService,public _router:Router) { }

  ngOnInit() {

        this._payment.getAllpayment().subscribe(

      (data:Paymentmodel[])=>{
        this.allpayment=data;
      },
      function(error){
        alert(error);
      },
      function(){
        console.log('payment aai gayu');
      }
      
    );
  }
     deletepayment(item:Paymentmodel){
this._payment.deletepayment(item.pay_id).subscribe(
  (data:any)=>{

    this.allpayment.splice(this.allpayment.indexOf(item),1);
    alert("deleted");

  },
  function(error){
    alert(error);
  }
);
}
updatepayment(item:Paymentmodel){

this._router.navigate(['/editpayment',item.pay_id]);

}


}
