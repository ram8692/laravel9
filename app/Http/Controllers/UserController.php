<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use App\Models\Member;

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

    function userlogin(Request $request){
        
        $data = $request->input('user');
        $request->session()->put('user',$data);
        return redirect('profile');
        //return session('user');
    }

    function uploaddoc(Request $request){
        return $request->file('file')->store('img');
    }

    function list(){
        $data = Member::all();
        return view('list', ['data'=>$data]);
    }

    function pdata(){
        $data = Member::paginate(5);
        return view('pdata', ['data'=>$data]);
    }

    function storeformdatatostore(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->gender = $req->gender;
        $member->save();
        $req->session()->flash('mess','data has been saved');
        return redirect('list');
    }

    function deletedata($id){
        $member = Member::find($id);
        $member->delete();
        return redirect('list');
    }

    function sdata($id){
        $member = Member::find($id);
        return view('edit_member', ['data'=>$member]);
    }

    public function update(Request $req){
        $member = Member::find($req->id);
        $member->name = $req->name;
        $member->gender = $req->gender;
        $member->save();
        return redirect('list');
    }

}
