<?php

namespace App\Http\Controllers;

use App\Jobs\Sendmailjob;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        $details['email'] = "moorthyponnusamy2019@gmail.com";
        $delay = Carbon::create(2024, 5, 31, 16, 1, 0); 
        dispatch(new Sendmailjob($details))->delay($delay);
        return response()->json(['status' => 200, 'message' => 'Message has been send successfully ']);
    }
}
