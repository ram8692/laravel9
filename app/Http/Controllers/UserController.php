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

    public function queryb(){
       //to get all data
       // $data = DB::table("members")->get();

      // $data = DB::table("members")->where("id",5)->get();

     // $data = (array)DB::table("members")->find(5);

     //$data = DB::table("members")->count();
        //return $data;

        //insert data
        /* $data = DB::table("members")->insert([
             'name'=>'test1',
             'gender'=>'female',
         ]);*/

        //update data
        /*
         $data = DB::table("members")->where('id',6)->update([
             'name'=>'test2',
             'gender'=>'female',
         ]);*/

        // $data = DB::table("members")->where('id',6)->delete(); 
    }

    public function aggregate(){
        $data = DB::table("members")->avg('id');
        return $data;
    }

    public function joinq(){
        $data = DB::table("users")->join('members','members.user_id',"=","users.id")->where("members.user_id",2)->select('members.name','users.name')->get();

        return $data;
    }

}
