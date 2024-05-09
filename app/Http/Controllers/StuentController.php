<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StuentController extends Controller
{
    public function index(){
        return view('student.index');
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request){

    try{
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|',
        ]);
        $newstudent = Student::create($validateData);
        return redirect(route('student.index'))->with('success', 'store the information');
      } catch(\Exception $e) {
        return redirect(route('student.create'))->with('error', 'fill the all informartion')->with('error', $e->getMessage());
      }
    }
    
}
