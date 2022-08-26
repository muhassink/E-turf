<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\contactus;
use App\Models\gallery;
use App\Models\regmanager;
use App\Models\reguser;
use Illuminate\Http\Request;

class turfcontroller extends Controller
{
   public function indexpage()
   {
      return view('indexpage');
   }
   public function regmanager()
   {
      return view('regmanager');
   }
   public function gallary()
   {
      $data['result']=gallery::get();
      return view('gallary',$data);
   }
   public function reguser()
   {
      return view('reguser');
   }
   public function managerlogin()
   {
      return view('managerlogin');
   }
   public function adminlogin()
   {
      return view('adminlogin');
   }
   public function userlogin()
   {
      return view('userlogin');
   }
   public function contactus()
   {
      return view('contactus');
   }
   public function adminhome()
   {
      return view('admin.adminhome');
   }
   public function regmanageraction(Request $req)
   {
      $name = $req->input('name');
      $contactnumber = $req->input('contactnumber');
      $email = $req->input('email');
      $password = $req->input('password');
      $location = $req->input('location');
      $data = [
         'name' => $name,
         'contactnumber' => $contactnumber,
         'email' => $email,
         'password' => $password,
         'location' => $location
      ];
      regmanager::insert($data);
      return redirect('/regmanager');
   }
   public function reguseraction(Request $req)
   {
      $name = $req->input('name');
      $contactnumber = $req->input('contactnumber');
      $email = $req->input('email');
      $password = $req->input('password');
      $data = [
         'name' => $name,
         'contactnumber' => $contactnumber,
         'email' => $email,
         'password' => $password
      ];
      reguser::insert($data);
      return redirect('/reguser');
   }
   public function adminloginaction(Request $req)
   {
      $email = $req->input('email');
      $password = $req->input('password');
      $data = admin::where('email', $email)->where('password', $password)->first();
      if (isset($data)) {
         if ($data->usertype == "admin") {
            $req->session()->put(array('sess' => $data->id));
            return redirect('/adminhome');
         }
      } else {
         return redirect('/adminlogin');
      }
   }
   public function ManagerLoginAction(Request $req)
   {
      $email = $req->input('email');
      $password = $req->input('password');
      $data = regmanager::where('email', $email)->where('password', $password)->first();
      if (isset($data)) {
         if ($data->status == "Aproved") {
            $req->session()->put(array('sess' => $data->id));
            return redirect('/managerindex');
         } else {
            return redirect('/managerlogin')->with('error', 'Wait for confirmation');
         }
      } else {
         return redirect('/managerlogin')->with('error', 'Invalid email or password');
      }
   }
   public function UserLoginAction(Request $req)
   {
      $email = $req->input('email');
      $password = $req->input('password');
      $data = reguser::where('email', $email)->where('password', $password)->first();
      if (isset($data)) {
         $req->session()->put(array('sess' => $data->id));
         return redirect('/userindex');
      } else {
         return redirect('/userlogin');
      }
   }
   public function ContactUsAction(Request $req)
   {
      $name = $req->input('name');
      $email = $req->input('email');
      $subject = $req->input('subject');
      $message = $req->input('message');
      $data = [
         'name' => $name,
         'email' => $email,
         'subject' => $subject,
         'message' => $message
      ];
      contactus::insert($data);
      return redirect('/contactus');
   }
}
