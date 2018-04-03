import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { TasksService } from './shared/tasks.service';
import { TaskComponent } from './task/task.component';
import { Router } from './app.routing';
import { HeaderComponent } from './header/header.component';
import { AddtaskComponent } from './task/addtask.component';
import { CategorydataService } from './shared/categorydata.service';
import { CartypedataService } from './shared/cartypedata.service';
import { UserdataService } from './shared/userdata.service';
import { BookingdataService } from './shared/bookingdata.service';
//import { BuscustdataService } from './shared/buscustdata.service';
import { DriverdataService } from './shared/driverdata.service';
import { FeedbackdataService } from './shared/feedbackdata.service';
import { PaymentdataService } from './shared/paymentdata.service';
import { CardataService } from './shared/cardata.service';
import { CitydataService } from './shared/citydata.service';
import { CanceldataService } from './shared/canceldata.service';
import { CarcustdataService } from './shared/carcustdata.service';
import { FacilitydataService } from './shared/facilitydata.service';
import { BusdataService } from './shared/busdata.service';
import { CategoryComponent } from './category/category.component';
import { AddcategoryComponent } from './category/addcategory.component';
import { CartypeComponent } from './cartype/cartype.component';
import { UserComponent } from './user/user.component';
import { AddcartypeComponent } from './cartype/addcartype.component';
import { BookingComponent } from './booking/booking.component';
//import { BuscustComponent } from './buscust/buscust.component';
import { DriverComponent } from './driver/driver.component';
import { AdddriverComponent } from './driver/adddriver.component';
import { BusComponent } from './bus/bus.component';
import { CancelComponent} from './cancel/cancel.component';
import { CarcustComponent } from './carcust/carcust.component';
import { CarComponent } from './car/car.component';
import { AddcarComponent } from './car/addcar.component';
import { UpdatecarComponent} from './car/updatecar.component';
import { AddbusComponent } from './bus/addbus.component';
import { CityComponent } from './city/city.component';
import { AddcityComponent } from './city/addcity.component';
import { FeedbackComponent } from './feedback/feedback.component';
import { PaymentComponent } from './payment/payment.component';
import { UpdatecityComponent } from './city/updatecity.component';
import { UpdatecartypeComponent } from './cartype/updatecartype.component';
import { CartypefilterPipe } from './cartype/cartypefilter.pipe';
import { UpdatebusComponent } from './bus/updatebus.component';
import { BookingfilterPipe } from './booking/bookingfilter.pipe';
import { BusfilterPipe } from './bus/busfilter.pipe';
import { BuscustfilterPipe } from './buscust/buscustfilter.pipe';
import { DriverfilterPipe } from './driver/driverfilter.pipe';
import { UserfilterPipe } from './user/userfilter.pipe';
import { UpdatedriverComponent } from './driver/updatedriver.component';





import { PaginatePipe } from './jinal/ng2paging/paginate.pipe';
import { PaginationService } from './jinal/ng2paging/pagination.service';
import { PaginationControlsComponent } from './jinal/ng2paging/pagination-controls.component';
import { PaginationControlsDirective } from './jinal/ng2paging/pagination-controls.directive';
import { PaginationInstance } from './jinal/ng2paging/pagination-instance';
import { FacilityComponent } from './facility/facility.component';
import { AddfacilityComponent } from './facility/addfacility.component';
import { FacilityfilterPipe } from './facility/facilityfilter.pipe';
import { CarfilterPipe } from './car/carfilter.pipe';
import { CityfilterPipe } from './city/cityfilter.pipe';
import { FeedbackfilterPipe } from './feedback/feedbackfilter.pipe';
import { CarcustfilterPipe } from './carcust/carcustfilter.pipe';
import { CancelfilterPipe } from './cancel/cancelfilter.pipe';
import { PaymentfilterPipe } from './payment/paymentfilter.pipe';
import { SildnavComponent } from './sildnav/sildnav.component';



@NgModule({
  declarations: [
    AppComponent,
    TaskComponent,
    HeaderComponent,
    AddtaskComponent,
    CategoryComponent,
    AddcategoryComponent,
    CartypeComponent,
    UserComponent,
    AddcartypeComponent,
    BookingComponent,
   // BuscustComponent,
    DriverComponent,
    UpdatecityComponent,
    AddcityComponent,
    FeedbackComponent,
    CityComponent,
    CarcustComponent,
    PaymentComponent,
    UpdatecarComponent,
    AddcarComponent,
    CarComponent,
    AdddriverComponent,
    BusComponent,
    CancelComponent,
    AddbusComponent,
    UpdatecartypeComponent,
    CartypefilterPipe,
    UpdatebusComponent,
    BookingfilterPipe,
    BusfilterPipe,
    BuscustfilterPipe,
    DriverfilterPipe,
    UserfilterPipe,
    UpdatedriverComponent,

     PaginatePipe,
    PaginationControlsComponent,
    PaginationControlsDirective,
    FacilityComponent,
    AddfacilityComponent,
    FacilityfilterPipe,
    CarfilterPipe,
    CityfilterPipe,
    FeedbackfilterPipe,
    CarcustfilterPipe,
    CancelfilterPipe,
    PaymentfilterPipe,
    SildnavComponent
   
  
    
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    Router
  ],
  providers: [TasksService,CategorydataService,CartypedataService,UserdataService,BookingdataService,
  DriverdataService,FeedbackdataService,CarcustdataService,CardataService,CitydataService,CanceldataService,PaymentdataService,BusdataService,PaginationService,FacilitydataService],
  bootstrap: [AppComponent]
})
export class AppModule { }
