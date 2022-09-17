<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MyApiController extends Controller
{
    //
    function api_data(){
        return ['name'=>'Rambabu','Address'=>'mumbai kandivali maharashtra'];
    }
    function get_member_data(){
        return Member::all();
    }
}
