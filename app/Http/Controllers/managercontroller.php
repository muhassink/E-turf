<?php

namespace App\Http\Controllers;

use App\Models\turfbookings;
use App\Models\addturf;
use App\Models\payment;
use App\Models\regmanager;
use App\Models\reguser;
use Illuminate\Http\Request;

class managercontroller extends Controller
{
    public function managerindex()
    {
        $id=session('sess');
        $data['managername'] = regmanager::where('id',$id)->get();
        return view('manager.managerindex',$data);
    }
    
        
    public function viewturfmanager()
    {
        $id=session('sess');
        $data['managername'] = regmanager::where('id',$id)->get();

        $data['result'] = addturf::where('manager',$id)->get();
        return view('manager.viewturfmanager', $data);
    }
    public function viewusersmanager()
    {
        $id=session('sess');
        $data['managername'] = regmanager::where('id',$id)->get();
        $data['result1'] = reguser::get();
        return view('manager.viewusersmanager', $data);
    }
    public function editprofilemanager()
    {
        $id=session('sess');
        $data['managername'] = regmanager::where('id',$id)->get();
        $data['manager'] = regmanager::where('id', $id)->get();
        return view('manager.editprofilemanager', $data);
    }
    public function EditProfileAction(Request $req, $id)
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
        regmanager::where('id', $id)->update($data);
        return redirect('/managerindex');
    }
    public function viewbookingsmanager(){
        $id=session('sess');
        $data['managername'] = regmanager::where('id',$id)->get();
        $data['result3']=turfbookings::join('addturves','addturves.id','=','turfbookings.turf_id')
        ->join('regusers','regusers.id','=','turfbookings.user_id')
        ->where('addturves.manager',$id)
        ->select('turfbookings.id','turfbookings.nameturf','turfbookings.location','turfbookings.price','turfbookings.date','turfbookings.time','turfbookings.status','regusers.name')
        ->get();
        return view('manager.viewbookingsmanager',$data);
       }
       public function Aprove($id){
        $data=[
            'status'=>"Aproved"
        ];
        turfbookings::where('id',$id)->update($data);
        return redirect('/viewbookingsmanager');
       }
       public function Decline($id){
        $data=[
            'status'=>"Declined"
        ];
        turfbookings::where('id',$id)->update($data);
        return redirect('/viewbookingsmanager');
       }
       public function viewpaymentmanager(){
        $id=session('sess');
        $data['managername'] = regmanager::join('addturves','addturves.manager','=','regmanagers.id')
        ->join('turfbookings','turfbookings.turf_id','=','addturves.id')
        ->join('payments','payments.booking_id','=','turfbookings.id')
        ->where('regmanagers.id',$id)
        ->select('payments.id','payments.booking_id','payments.userid','payments.name_on_card','payments.credit_card_number','payments.exp_month','payments.exp_year','payments.status')
        ->get();
        $data['result']=payment::get();
        return view('manager.viewpaymentmanager',$data);
       }
}
