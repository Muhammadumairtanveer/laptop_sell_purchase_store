<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Models\mymodel;
use Illuminate\Routing\RouteAction;

Route::get('/welcome',[mycontroller::class,'welcome']);
//Route::get('/', function(){
//    return view('welcome');
//});
Route::get('/sendemail', function(){
    return view('send_email');
});
Route::post('/sendemail/send',[mycontroller::class,'send']);

Route::post('insertData',[mycontroller::class,'insert']);
Route::get('insert',[mycontroller::class,'readdata']);

Route::get('Update',[mycontroller::class,'updateordelete']);
Route::get('Updated',[mycontroller::class,'Update']);
Route::get('/welcome',[mycontroller::class,'readUser']);
Route::get('admin_login',[mycontroller::class,'adminindex'])->name('admin_login');
Route::post('admin_login',[mycontroller::class,'adminLogin'])->name('admin_login');

// Route::group(['middleware'=>'guest'],function(){ 
    Route::get('login',[mycontroller::class,'index'])->name('login'); 
    Route::post('login',[mycontroller::class,'login'])->name('login');    
    Route::get('register',[mycontroller::class,'register'])->name('register');
    Route::post('register',[mycontroller::class,'registered'])->name('register');
    
// });

// Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[maincontroller::class,'welcome'])->name('welcome');
    Route::get('logout',[maincontroller::class,'logout'])->name('logout');
// });

Route::get('/single/{id}',function($id){
    return view('single_item',[
        'item' => mymodel::find($id)
    ]);
});
?>

