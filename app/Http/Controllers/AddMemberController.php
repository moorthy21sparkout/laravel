<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMemberController extends Controller
{
    // public function add(Request $request)
    // {
         
    //     //    return response()->json($data);
    //     //    return $request->input();
    //     // Flash the data to the session
    //     $data=$request->session()->get('user');
    //     session()->flash('user', $data);
    //     $data = $request->input('user');
    //      return redirect('add');
    // }
     public function add(Request $request) {
         $successMessage = 'Message sent successfully';
         return view('add')->with('success', $successMessage);
     }
}
