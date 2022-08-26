<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\managercontroller;
use App\Http\Controllers\turfcontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;


//index

Route::get('/indexpage',[turfcontroller::class,'indexpage']);
Route::get('/regmanager',[turfcontroller::class,'regmanager']);
Route::get('/gallary',[turfcontroller::class,'gallary']);
Route::get('/reguser',[turfcontroller::class,'reguser']);
Route::get('/managerlogin',[turfcontroller::class,'managerlogin']);
Route::get('/adminlogin',[turfcontroller::class,'adminlogin']);
Route::get('/userlogin',[turfcontroller::class,'userlogin']);
Route::get('/contactus',[turfcontroller::class,'contactus']);
Route::get('/adminhome',[turfcontroller::class,'adminhome']);
Route::post('/regmanageraction',[turfcontroller::class,'regmanageraction']);
Route::post('/reguseraction',[turfcontroller::class,'reguseraction']);
Route::post('/adminloginaction',[turfcontroller::class,'adminloginaction']);
Route::post('/ManagerLoginAction',[turfcontroller::class,'ManagerLoginAction']);
Route::post('/UserLoginAction',[turfcontroller::class,'UserLoginAction']);
Route::post('/ContactUsAction',[turfcontroller::class,'ContactUsAction']);


//admin
Route::get('/addturf',[admincontroller::class,'addturf']);
Route::get('/adminheader',[admincontroller::class,'adminheader']);
Route::get('/addgallary',[admincontroller::class,'addgallary']);
Route::post('/AddGalleryAction',[admincontroller::class,'AddGalleryAction']);
Route::post('/AddTurfAction',[admincontroller::class,'AddTurfAction']);
Route::get('/viewmanager',[admincontroller::class,'viewmanager']);
Route::get('/Approve/{id}',[admincontroller::class,'Approve']);
Route::get('/Deccline/{id}',[admincontroller::class,'Deccline']);
Route::get('/viewgallery',[admincontroller::class,'viewgallery']);
Route::get('/Editgallery/{id}',[admincontroller::class,'Editgallery']);
Route::post('/GalleryUpdateAction/{id}',[admincontroller::class,'GalleryUpdateAction']);
Route::get('/Delete/{id}',[admincontroller::class,'Delete']);
Route::get('/viewturf',[admincontroller::class,'viewturf']);
Route::get('/viewusers',[admincontroller::class,'viewusers']);
Route::get('/editturf',[admincontroller::class,'editturf']);
Route::get('/editeditturf/{id}',[admincontroller::class,'editeditturf']);
Route::post('/UpdateTurfAction/{id}',[admincontroller::class,'UpdateTurfAction']);
Route::get('/Deleteturf/{id}',[admincontroller::class,'Deleteturf']);
Route::get('/viewbookingsadmin',[admincontroller::class,'viewbookingsadmin']);


//manager

Route::get('/managerindex',[managercontroller::class,'managerindex']);
Route::get('/managerheader',[managercontroller::class,'managerheader']);
Route::get('/viewturfmanager',[managercontroller::class,'viewturfmanager']);
Route::get('/viewusersmanager',[managercontroller::class,'viewusersmanager']);
Route::get('/editprofilemanager',[managercontroller::class,'editprofilemanager']);
Route::post('/EditProfileAction/{id}',[managercontroller::class,'EditProfileAction']);
Route::get('/viewbookingsmanager',[managercontroller::class,'viewbookingsmanager']);
Route::get('/Aprove/{id}',[managercontroller::class,'Aprove']);
Route::get('/Decline/{id}',[managercontroller::class,'Decline']);
Route::get('/viewpaymentmanager',[managercontroller::class,'viewpaymentmanager']);




//user

Route::get('/userindex',[usercontroller::class,'userindex']);
Route::get('/viewturfuser',[usercontroller::class,'viewturfuser']);
Route::get('/bookturfuser/{id}',[usercontroller::class,'bookturfuser']);
Route::post('/BookTurfAction/{id}',[usercontroller::class,'BookTurfAction']);
Route::get('/viewbookinguser',[usercontroller::class,'viewbookinguser']);
Route::get('/Paymentturf/{id}',[usercontroller::class,'Paymentturf']);
Route::post('/PaymentInsertAction/{id}',[usercontroller::class,'PaymentInsertAction']);
Route::get('/viewpayment/{id}',[usercontroller::class,'viewpayment']);
Route::get('/paymentbill/{id}',[usercontroller::class,'paymentbill']);
Route::get('/Download/{id}',[usercontroller::class,'Download']);
Route::get('/viewgalleryuser',[usercontroller::class,'viewgalleryuser']);

















































