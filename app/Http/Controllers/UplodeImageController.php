<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UplodeImageController extends Controller
{
    public function UplodeForm(){
        return view('image_uplode_form');
    }
    public function insertForm(){
        return "hi";
    }
}
