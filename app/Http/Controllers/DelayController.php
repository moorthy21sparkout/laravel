<?php

namespace App\Http\Controllers;

use App\Jobs\Delayjob;
use Illuminate\Http\Request;

class DelayController extends Controller
{
    public function delay()
    {

        $data = "hello everyone";
        Delayjob::dispatch($data)->delay(now()->addSeconds(30));

        return response()->json(['message'=> ' the message will send the log fill after 10 minutes']);
    }
}
