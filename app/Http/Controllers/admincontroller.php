<?php

namespace App\Http\Controllers;

use App\Models\addturf;
use App\Models\gallery;
use App\Models\regmanager;
use App\Models\reguser;
use App\Models\turfbookings;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
   //  public function addturf(){
   //     return view('admin.addturf');
   //  }
   public function adminheader()
   {
      return view('admin.adminheader');
   }
   public function addgallary()
   {
      return view('admin.addgallary');
   }
   public function AddGalleryAction(Request $req)
   {
      $description = $req->input('description');
      $file = $req->file('file');
      $filename = $file->getClientOriginalName();
      $file->move(public_path() . '/image/', $filename);
      $data = [
         'description' => $description,
         'file' => $filename
      ];
      gallery::insert($data);
      return redirect('/addgallary');
   }
   public function addturf()
   {

      $data['result'] = regmanager::where('status', "Aproved")->get();
      return view('admin.addturf', $data);
   }



   public function AddTurfAction(Request $req)
   {
      $name = $req->input('name');
      $description = $req->input('description');
      $location = $req->input('location');
      $price = $req->input('price');
      $manager = $req->input('manager');
      $data = [
         'name' => $name,
         'description' => $description,
         'location' => $location,
         'price' => $price,
         'manager' => $manager,
         'status'=>"Available"
      ];
      addturf::insert($data);
      return redirect('/addturf');
   }
   public function viewmanager()
   {
      $data['result'] = regmanager::get();
      return view('admin.viewmanager', $data);
   }
   public function Approve($id)
   {
      $data = [
         'status' => "Aproved"
      ];
      regmanager::where('id', $id)->update($data);
      return redirect('/viewmanager');
   }
   public function Deccline($id)
   {
      $data = [
         'status' => "Declined"
      ];
      regmanager::where('id', $id)->update($data);
      return redirect('/viewmanager');
   }
   // public function viewgallery(){
   //    return view('admin.viewgallery');
   // }
   public function viewgallery()
   {
      $data['result'] = gallery::get();
      return view('admin.viewgallery', $data);
   }
   public function Editgallery($id)
   {
      $data['result'] = gallery::where('id',$id)->get();
      return view('admin.Editgallery', $data);
   }
   public function GalleryUpdateAction(Request $req, $id)
   {
      $description = $req->input('description');
      $file = $req->file('file');
      if ($file == "") {
         $data = ['description' => $description];
      } else {
         $filename = $file->getClientOriginalName();
         $file->move(public_path() . '/image/', $filename);
         $data = [
            'description' => $description,
            'file' => $filename
         ];
      }
      gallery::where('id', $id)->update($data);
      return redirect('/viewgallery');
   }
   public function Delete($id)
   {
      gallery::where('id', $id)->delete();
      return redirect('/viewgallery');
   }
   public function viewturf(){
      $data['result']=addturf::get();
      return view('admin.viewturf',$data);
   }
   public function viewusers(){
      $data['user']=reguser::get();
      return view('admin.viewusers',$data);
   }
   public function editturf(){
      $data['result']=addturf::get();
      return view('admin.editturf',$data);
   }
   public function editeditturf($id){
      $data['turf']=addturf::where('id',$id)->get();
      $data['manager'] = regmanager::where('status', "Aproved")->get();
      return view('admin.editeditturf',$data);
   }
   public function UpdateTurfAction(Request $req,$id){
      $name=$req->input('name');
      $description=$req->input('description');
      $location=$req->input('location');
      $price=$req->input('price');
      $manager=$req->input('manager');
      $data=[
         'name'=>$name,
         'description'=>$description,
         'location'=>$location,
         'price'=>$price,
         'manager'=>$manager
      ];
      addturf::where('id',$id)->update($data);
      return redirect('/editturf');
    
   }
   public function Deleteturf($id){
      addturf::where('id',$id)->delete();
      return redirect('/editturf');
   }
   public function viewbookingsadmin(){
      $data['result']=turfbookings::get();
      return view('admin.viewbookingsadmin',$data);
   }
   }

