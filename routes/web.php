<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::view("grade",'/grade')->middleware('protectedPage');
Route::view("/",'/welcome')->middleware('protectedPage');


