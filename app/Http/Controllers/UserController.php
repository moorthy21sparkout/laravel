<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function user(UserRequest $request)
    {
        dd($request->all());
    }
}
