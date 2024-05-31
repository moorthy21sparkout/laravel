<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name="தமிழ் இலக்கியம்: தமிழ் இலக்கியம் 2000 ஆண்டுகள் பழமையானது. இதன் பகுதிகளில் சங்க இலக்கியம், சைவ சித்தாந்தம், தமிழர் வரலாறு போன்றவை அடங்கும்.

    தமிழக வரலாறு:  வரலாறு பண்டைய தமிழர் காலத்திலிருந்து தொடங்கி தற்போது வரை நிகழ்ந்த முக்கியமான சம்பவங்களை அடங்கும்.
    
    தமிழர் பண்பாடு மற்றும் மரபுகள்: தமிழர் உணவு, ஆடை, விழாக்கோலம், இசை மற்றும் நடனம் போன்ற பண்பாடு மற்றும் மரபுகள்.
    
    தமிழ்நாட்டு முக்கிய இடங்கள்: மாமல்லபுரம், மதுரை மீனாட்சியம்மன் கோவில், காஞ்சிபுரம், திருச்சி ராகுசித்திரம் மற்றும் குமரிக்கண்டம் போன்ற சுற்றுலா இடங்கள்";
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
