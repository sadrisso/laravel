<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function index(){
        return view('student-form');
    }

    function store(Request $req, Student $std){
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $std->fill($req->all())->save();

        return redirect('student/view');

    }

    function view(){
        $student = Student::all();
        return view('student-view', compact('student'));
    }

    function delete($id){
        Student::find($id)->delete();
        return redirect('student/view');
    }

    
}
