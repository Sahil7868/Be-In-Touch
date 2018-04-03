import { Pipe, PipeTransform } from '@angular/core';


@Pipe({
  name: 'bookingfilter'
})
export class BookingfilterPipe implements PipeTransform {

    book:any[]=[];
  book1:any[]=[];

  transform(value: any[], args: any): any {
  if(args!='')
    {
     return this.book=value.filter(res=>res.position.startsWith(args));
  //   this.book1=value.filter(res=>res.capacity.startsWith(args));
     // return this.book.concat(this.book1);
    }
    else{

    
    return value;
    }


    
  }

}
