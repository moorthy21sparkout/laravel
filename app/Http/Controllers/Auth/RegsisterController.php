<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegsisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:50',
                'email' => 'required',
                'password' => 'required|confirmed'
            ]
        );
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = hash::make($request->input('password'));
        $user->save();

        Auth::login($user);
        return redirect('home');
    }
}
