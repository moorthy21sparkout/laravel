<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AuthorizationController extends Controller
{
    public function index()
    {
        //if true shoe them some respone message atherwise show the 403 ->forbidden
        Gate::allows('isAdmin') ? Response::allow() : abort(403);
        return "authorize";
    }
}
