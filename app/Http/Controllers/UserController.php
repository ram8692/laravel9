<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($name)
    {
        $userd = ['ram', 'shyam', 'omkar'];
        return view('about', ['names' => $name, 'usersdata' => $userd]);
    }

    function getdata(Request $req)
    {
        return $req->input();
    }

    function getdbdata()
    {
        //return DB::select('select * from users');
        return User::all();
    }

    function getapidata()
    {
        $data = json_decode(Http::get("https://reqres.in/api/users"));
       // json_decode()
       // print_r($data->data);die();
        return view('grade',['collection'=>$data->data]);
        
    }

    function storedata(Request $request)
    {
        //return $request->input();
        $data =  $request->input("user");
        $request->session()->flash('user',$data);
        return redirect('store');

    }
}
