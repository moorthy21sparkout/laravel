<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserAuth extends Controller
{
    public function UserLogin(Request $request)
    {
        $data = $request->input();
        $request->session()->put('name', $data['name']);
        return redirect('profile');
    }
}
