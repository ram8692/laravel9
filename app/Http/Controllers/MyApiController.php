<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyApiController extends Controller
{
    //
    function api_data(){
        return ['name'=>'Rambabu','Address'=>'mumbai kandivali maharashtra'];
    }
}
