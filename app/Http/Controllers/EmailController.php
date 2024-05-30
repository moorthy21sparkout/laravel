<?php

namespace App\Http\Controllers;

use App\Mail\WellcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function wellcomemail(){
        $tomail="moorthyponnusamy2019@gmail.com";
        $message=" hello ->தமிழ் இலக்கியம்: தமிழ் இலக்கியம் 2000 ஆண்டுகள் பழமையானது. இதன் பகுதிகளில் சங்க இலக்கியம், சைவ சித்தாந்தம், தமிழர் வரலாறு போன்றவை அடங்கும்.

        தமிழக வரலாறு: தமிழ்நாட்டின் வரலாறு பண்டைய தமிழர் காலத்திலிருந்து தொடங்கி தற்போது வரை நிகழ்ந்த முக்கியமான சம்பவங்களை அடங்கும்.
        
        தமிழர் பண்பாடு மற்றும் மரபுகள்: தமிழர் உணவு, ஆடை, விழாக்கோலம், இசை மற்றும் நடனம் போன்ற பண்பாடு மற்றும் மரபுகள்.
        
        தமிழ்நாட்டு முக்கிய இடங்கள்: மாமல்லபுரம், மதுரை மீனாட்சியம்மன் கோவில், காஞ்சிபுரம், திருச்சி ராகுசித்திரம் மற்றும் குமரிக்கண்டம் போன்ற சுற்றுலா இடங்கள்";
        $subject="Tamil Content";
        $attech=storage_path('app\new-laravel-project\public\uploads\g3elgUVCYcFa88iepNOpy3Mnr4q7ge6vcWKFZfMx.jpg');
        Mail::to($tomail)->send(new WellcomeMail($message, $subject,$attech));
        dd("mail send successfully");

    }
}
