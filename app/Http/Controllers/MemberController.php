<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
 public function index(){
    return  Member::all();
 }
 public function next(){
    $member=new Member;
    $member->name="moorthy";
    $member->email="m@gmail.com";
    $member->address="india";
    $member->save();
    

 }

}
