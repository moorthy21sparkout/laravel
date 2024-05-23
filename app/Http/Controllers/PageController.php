<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function index()
    {
        Session::put('name',[ 'sudhan']);
        Session::put('age', ['12','21','32','21']);
        session::regenerate();
         dd(session()->all());
        // if (Session::has('age')) {
        //     dd("name is exits");
        // } else {
        //     dd("not exits");
        // }
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
}
