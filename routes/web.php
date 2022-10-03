<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;
use App\Models\Member;
use App\Models\User;
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

    // Route::get('test_facade',function(){
    //     return \App\Facades\PaymentFacade::getFacadsAccessor();
    // });

    Route::get('test_facade2',function(){
       // $user = new \App\MyCustomLibraries\User();
      //  $user->my_name();

        //\App\MyCustomLibraries\TserFacade::my_name();

    });

    Route::get('collection',function(){
        /* //1st method
        $collection = collect([1,2,3,4,5,6,7,8]);
        dd($collection); */

        $collection = \Illuminate\Support\Collection::make([1,2,3,3,4,5,6,7,8]);
        //dd($collection->all());
        //dd($collection->get(1));
        //dd($collection);
        //dd($collection->count());
        //dd($collection->sum());
        //dd($collection->avg());
        //dd($collection->chunk(3));
        //$collection->dd();
        //$collection->dump();
        //return $collection->duplicates();
        //return $collection->shuffle();
        //return $collection->min();
        //return $collection->max();
        //return $collection->mode();
        //return $collection->first();
        //return $collection->last();
        //$member = Member::all();
        //dd($member->pluck('name'));
       // dd($member->unique('created_at'));

     /*   $collection = collect([
           ["name"=>"test1","age"=>12],
           ["name"=>"test2","age"=>22],
           ["name"=>"test3","age"=>32],
           ["name"=>"test4","age"=>42],
           ["name"=>"test5","age"=>62],
           ["name"=>"test6","age"=>52],
        ]); */

        $collection = collect([1,2,3,4,5,6,7,8]);

       // dd($collection->where("age",">",60));
       //dd($collection->whereIn("age",[12,22,32]));
       //dd($collection->whereBetween("age",[12,32]));
       //dd($collection->implode(", "));
       //dd($collection->join(", "," and "));
       //return $collection->toJson();

      /* 
      map will not change array value in its own
      $newc = $collection->map(function($value){
        return $value*2;
       });

       dd($newc);
 */
/*
transform will  change array value in its own
$collection->transform(function($value){
    return $value*2;
   });

   dd($collection); */
   //pull,push,pop

   //lazy collection
  /*  $member = \App\Models\Member::cursor();
     foreach($member->take(2) as $mem){
echo $mem->name;
echo '<br>';
     } */

     $member = \App\Models\Member::cursor()->remember();
     foreach($member->take(2) as $mem){
echo $mem->name;
echo '<br>';
     }
     echo '<br>';
     echo '<br>';
     echo '<br>';
     foreach($member->take(4) as $mem){
        echo $mem->name;
        echo '<br>';
             }

     });

//below is the contract 
//u can choose in which way u have to call there are two ways facades and contract 
 Route::get('contract',function(Illuminate\Contracts\Cache\Factory $cache){

    $cache->put('name','the ram coder');
dd($cache->get('name'));

 });
    


