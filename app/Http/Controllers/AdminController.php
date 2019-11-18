<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Studentmodel;

class AdminController extends Controller
{
    public function addStudent(){
        $student = new Studentmodel();
        $student->name = request('name');
        $student->fname = request('fname');
        $student->class = request('class');

        $student->save();
        return redirect('addStudent');

    }

    public function viewStudents(){
        $student = Studentmodel::all();
        return view('viewStudents',compact('student'));
    }

    public function editStudent($id){
        $student = Studentmodel::find($id);
        return view('editStudent',compact('student','id'));
    }
    public function updateStudent($id,Request $request){
        $student = Studentmodel::find($id);

        $student->name = request('name');
        $student->fname = request('fname');
        $student->class = request('class');


        $student->save();

        return redirect('viewStudents');
    }

    public function deleteStudent($id){
        $hr = Studentmodel::find($id);
        $hr->delete();
        return redirect('viewStudents');
    }
}
