<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $student = Student::with('result')->get();
        echo '<pre>';
        dd($student->toArray());
    }
}
