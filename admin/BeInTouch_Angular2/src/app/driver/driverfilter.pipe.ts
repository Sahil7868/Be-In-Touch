import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'driverfilter'
})
export class DriverfilterPipe implements PipeTransform {
   cartype:any[]=[];
  cartype1:any[]=[];

  transform(value: any[], args: any): any {
      if(args!='')
    {
    this.cartype=value.filter(res=>res.address.startsWith(args));
      this.cartype1=value.filter(res=>res.name.startsWith(args));
      return this.cartype.concat(this.cartype1);
    }
    else{

    
    return value;
    }
  }

}
