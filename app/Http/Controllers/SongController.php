<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;

class SongController extends Controller
{
    //
    public function add_song(){
        $song = new Song();
        $song->title= "Baby vaccine Hai";
        $song->save();
    }

    //get songs based on singer id
    public function show_song($id)
    {
        $song = Singer::find($id)->songs;
        dd($song->toArray());
    }

    //get singer based on song id
    public function show_singer($id)
    {
        $singer = Song::find($id)->singers;
        dd($singer->toArray());
    }
}
