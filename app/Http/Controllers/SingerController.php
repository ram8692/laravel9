<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;

class SingerController extends Controller
{
    //
    public function add_singer(){
        $singer = new Singer();
        $singer->name= "Neha Kakker";
        $singer->save();

        $songsids = [1,3,5];
        $singer->songs()->attach($songsids);
    }
}
