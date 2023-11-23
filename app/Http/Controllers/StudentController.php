<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function index(){
        $url = url('student/create');
        $title = "Add Student";
        return view('student-form', compact('url', 'title'));
    }

    function store(Request $req, Student $std){

        // demo($req->all());
        // die;

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

    function trash(){
        $student = Student::onlyTrashed()->get();
        return view('student-trash', compact('student'));
    }

    function delete($id){
        Student::find($id)->delete();
        return redirect('student/view');
    }

    function restore($id){
        Student::withTrashed()->find($id)->restore();
        return redirect('student/restore');
    }

    function forceDelete($id){
        Student::withTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }

    function edit($id){
        $student = Student::find($id);
        if(is_null($student)){
            return redirect('student/view');
        }else{
            $url = url('student/update'). '/' . $id;
            $title = "Update Student";
            return view('student-form', compact('url', 'title', 'student'));
        }
    }

    function update($id, Request $req){

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $student = Student::find($id);

        $student->name = $req['name'];
        $student->email = $req['email'];
        $student->password = $req['password'];
        $student->save();

        return redirect('student/view');
    }

}
