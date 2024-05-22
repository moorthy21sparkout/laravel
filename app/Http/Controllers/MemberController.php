<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function list(){
        // Display a paginated list of members.
        $data=Member::paginate(20);
        return view('list',['members'=>$data]);
    }
}
