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
        $data = Http::get("https://jsonplaceholder.typicode.com/todos/");
        return view('grade',['collection'=>$data]);
    }
}
