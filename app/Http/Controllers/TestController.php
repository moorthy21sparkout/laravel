<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        event(new TestEvent('on click'));
        $success=session('success');
        return view('event.index',compact('success'));
    }
}
