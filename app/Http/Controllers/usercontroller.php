<?php

namespace App\Http\Controllers;

use App\Models\addturf;
use App\Models\gallery;
use App\Models\payment;
use App\Models\turfbookings;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
   public function userindex(){
    return view('user.userindex');
   }
   public function viewturfuser(){
    $data['result']=addturf::get();
    return view('user.viewturfuser',$data);
   }
   public function bookturfuser($id){
    // $id=session('sess');
    $data['result1']=addturf::where('id',$id)->get();
    return view('user.bookturfuser',$data);
   }
   public function BookTurfAction(Request $req,$id){
    $nameturf=$req->input('nameturf');
    $description=$req->input('description');
    $location=$req->input('location');
    $price=$req->input('price');
    $date=$req->input('date');
    $time=$req->input('time');
    $user_id=session('sess');
    $data=[
        'nameturf'=>$nameturf,
        'description'=>$description,
        'location'=>$location,
        'price'=>$price,
        'date'=>$date,
        'time'=>$time,
        'user_id'=>$user_id,
        'turf_id'=>$id
    ];
    turfbookings::insert($data);
    return redirect('/viewturfuser');

   }
   public function viewbookinguser(){
    $id=session('sess');
    $data['result2']=turfbookings::where('user_id',$id)->get();
    return view('user.viewbookinguser',$data);
   }
   public function Paymentturf($id){
    // $id=session('sess');
    $data['result5']=turfbookings::where('id',$id)->get();
    return view('user.Paymentturf',$data);
   }
   public function PaymentInsertAction(Request $req,$id){
    // echo $id;
    // exit();
    $cardname=$req->input('cardname');
    $cardnumber=$req->input('cardnumber');
    $expmonth=$req->input('expmonth');
    $expyear=$req->input('expyear');
    $cvv=$req->input('cvv');
    $userid=session('sess');
    $data1=['status'=>"payment recieved"];
    
    $data=[
        'name_on_card'=>$cardname,
        'credit_card_number'=>$cardnumber,
        'exp_month'=>$expmonth,
        'exp_year'=>$expyear,
        'cvv'=>$cvv,
        'userid'=>$userid,
        'booking_id'=>$id
    ];
    payment::insert($data);
    turfbookings::where('id',$id)->update($data1);
    return redirect('/viewbookinguser');
   }
   public function viewpayment($id){
    // $id=session('sess');
    $data['result']=payment::where('id',$id)->get();
    return view('user.viewpayment',$data);
   }
   public function paymentbill($id){
    $userid=session('sess');
    $data['result']=payment::join('turfbookings',"turfbookings.id",'=','payments.booking_id')
    ->where('payments.id',$id)->where('turfbookings.user_id',$userid)
    ->select('payments.name_on_card','turfbookings.nameturf','turfbookings.location','turfbookings.date','turfbookings.time','turfbookings.price','turfbookings.status')
    ->get();
    return view('user.paymentbill',$data);
   }
   public function viewgalleryuser(){
    $data['result']=gallery::get();
    return view('user.viewgalleryuser',$data);
   }


}
