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
    function get_member_data($id){
        return Member::find($id);
    }

    function save_member_data(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->gender = $req->gender;
        $member->user_id = $req->user_id;
        $result = $member->save();
        if($result){
            return ['result'=>'data saved'];
        }else{
            return ['result'=>'sorry failed'];
        }
        
    }
}
