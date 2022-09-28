<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;
use Illuminate\Foundation\Bootstrap\RegisterFacades;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Facade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('/', function () {
//      return view('welcome');
//  });

// Route::get('/', function () {
//     return redirect('about');
// });

//  Route::get('/{name}', function ($name) {
//      return view('about',['names'=>$name]);
//  });


// Route::get("user/{id}",[UserController::class,"show"]);
Route::view("about",'/about');


Route::get("user/{name}",[UserController::class,"show"]);
Route::post("getdata",[UserController::class,"getdata"]);
Route::view("noaccess",'/noaccess');
Route::view("hello",'/hello');

/*
Route::group(['middleware'=>'protectedPage'],function(){
    Route::view("grade",'/grade');
    Route::get('/', function () {
        return view('welcome');
    });
});
*/
Route::view("grade",'/grade');
//Route::view("grade",'/grade')->middleware('protectedPage');
//Route::view("/",'/welcome')->middleware('protectedPage');

Route::get("getdbdata",[UserController::class,"getdbdata"]);
Route::get("getapidata",[UserController::class,"getapidata"]);

Route::view("store",'/storeuser');
Route::post("storecontroller",[UserController::class,"storedata"]);

//Route::view("login",'/login');
Route::post("userlogin",[UserController::class,"userlogin"]);
//Route::view("profile",'/profile');

//Route::view("profile","profile");
Route::get("/logout",function(){
    if(session()->has('user')){
        session()->pull('user',null);
    }
    return redirect('login');
});


Route::get("/login",function(){
    if(session()->has('user')){
        //session()->pull('user',null);
        return redirect('profile');
    }
    return view('login');
});

Route::get("/profile",function(){
    if(session()->has('user')){
        //session()->pull('user',null);
        return view('profile');
    }
    return redirect('login');
});

Route::view("upload","uploadfile");
Route::post("uploaddoc",[UserController::class,"uploaddoc"]);

Route::view("profilep","profilepage");

Route::get("list",[UserController::class,"list"]);
Route::get("paginatedata",[UserController::class,"pdata"]);

Route::view("storedata","storedata");
Route::post("storeformdata",[UserController::class,"storeformdatatostore"]);
Route::get("delete/{id}",[UserController::class,"deletedata"]);

Route::get("edit/{id}",[UserController::class,"sdata"]);
Route::post("editform",[UserController::class,"update"]);
Route::get("queryb",[UserController::class,"queryb"]);
Route::get("aggregate",[UserController::class,"aggregate"]);

Route::get("joinq",[UserController::class,"joinq"]);
Route::get("ono",[UserController::class,"ono"]);

Route::get('member/{id}',[UserController::class,'showdata']);
Route::get('student',[StudentController::class,'index']);
Route::get('add_song',[SongController::class,'add_song']);
Route::get('add_singer',[SingerController::class,'add_singer']);
Route::get('show_song/{id}',[SongController::class,'show_song']);
Route::get('show_singer/{id}',[SongController::class,'show_singer']);
Route::get('test_provider',[UserController::class,'test_provider']);

/*Route::get('paypal', function (\App\Service\PaypalService $payment) {
         //return view('welcome');
        // dump($payment->pay());
        //below is the multiple instance of class  
         dd(app(\App\Service\PaypalService::class),app(\App\Service\PaypalService::class));
     });*/

     //below code is not working some issue is there
    //  Route::get('test_provider_facade',function(){
    //      return \App\Service\AwesomeServiceInterface::doAwesomething();
    //  });

    


