<?php

namespace App\Http\Controllers;

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
        
        //reverse
        $result = Result::with('student')->get();
        dd($result->toArray());
    }
}
