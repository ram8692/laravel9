<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Result;

class StudentController extends Controller
{
    public function index(){
        /*
        $student = Student::with('result')->get();
        echo '<pre>';
        dd($student->toArray());*/
        
        //reverse in belongs to case
       /* $result = Result::with('student')->get();
        dd($result->toArray());*/

        /* below case is for has many
        //$student = Student::with('posts')->get();
        //in below case we are getting data from result as well 
        //$student = Student::with('posts','result')->get();
        //dd($student->toArray());*/

        $post = Post::with('student')->get();
        dd($post->toArray());

    }
}
