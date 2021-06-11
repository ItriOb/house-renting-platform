<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Booking_house;
use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Image;
use App\Models\Message;
use App\Models\ReservationGuest;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class HomeController extends Controller
{
    //
    public function listAllHouses(){
         $houses = House::with('city')->get();
         return view('main.home',compact('houses'));
    }

    public function listAllHouses2(){
        $houses = House::with('city')->get();
        return view('main.houseslist',compact('houses'));
   }

   public function search(Request $request){
     $city = $request->input('place');
     $checkIn = $request->input('check_in');
     $checkOut = $request->input('check_out');
     // $checkIn = Carbon::createFromFormat('d-m-Y',$checkIn1);
     // $checkOut = Carbon::createFromFormat('d-m-Y',$checkOut1);
     $houses = House::with('bookings')->whereHas('bookings',function($q) use ($checkOut,$checkIn){
          $q->where('check_In', '>=', $checkOut)->orWhere('check_Out', '<=', $checkIn);
      })->orWhereDoesntHave('bookings')->get();
      $houses2 = collect();
      foreach($houses as $house){
          if($house->city->name==$city){
                         $houses2->push($house);
                    }
      }
      $houses2 = $houses2->unique();
          
           
      return view('main.houseresults',['houses'=>$houses2, 'checkIn' => $checkIn, 'checkOut'=>$checkOut]);
}
     public function postMessage(Request $request){
          $request->validate([
               'name'=>'required',
               'email'=>'required|email',
               'subject'=>'required|min:10',
               'message'=>'required|min:10'
           ]);
   
   
           $message = new Message($request->all());
           $query = $message->save();
   
           // return $request->all();
   
           if($query){
               return redirect()->route('home')->with([
                   'success' => 'Message sended'
               ]);;
           }else{
               return redirect()->route('home')->with([
                   'fail' => 'something went wrong'
               ]);;
           }
     }

     public function houseDetails(Request $request){

          $id = $request->id;
          $house = House::find($id);

          $images = Image::where('house_id',$id)->get();
  
          return view('main.housedetails',compact('house','images'));
  
      }

      public function houseDetails2(Request $request){

        $id = $request->id;
        $house = House::find($id);

        $images = Image::where('house_id',$id)->get();

        return view('main.housedetails2',compact('house','images'));

    }

      public function image(){
          $image = Image::find(1);
          return $image;
      }

      public function about(){
          $bookings = Booking::all();
          $clients = ReservationGuest::all();
          return view('main.about', ['bookings'=>$bookings,'clients'=>$clients]);
      }

      public function addBooking(Request $request){
          $reservationGuest = new ReservationGuest();
          $reservationGuest->first_name = $request->input('firstname'); 
          $reservationGuest->last_name = $request->input('lastname');
          $reservationGuest->email = $request->input('email');
          $reservationGuest->phone = $request->input('phone');
          $reservationGuest->save();
          
          $booking = new Booking();
          $booking->reservationguest_id = $reservationGuest->id;
          $booking->house_id = $request->input('houseid');
          $booking->check_In = $request->input('checkIn');
          $booking->check_Out = $request->input('checkOut');
          $booking->state = "yes";
          $booking->total_price = $request->input('totalprice');
          $booking->save();

          $booking_house = new Booking_house();
          $booking_house->bookings_id = $booking->id;
          $booking_house->houses_id = $request->input('houseid');
          $booking_house->save();

          if($booking_house){
            return redirect()->route('home')->with([
                'booking' => 'Booking Added'
            ]);;
        }else{
            return redirect()->route('home')->with([
                'notbooking' => 'Something went wrong'
            ]);;
        }

          
      }
}
