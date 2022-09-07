<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($name){
        $userd = ['ram','shyam','omkar'];
        return view('about',['names'=>$name,'usersdata' =>$userd]);
    }

    function getdata(Request $req){
       return $req->input();
    }
}
