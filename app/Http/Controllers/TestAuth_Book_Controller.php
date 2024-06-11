<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tests\Feature\ForeignKeyTest;

class TestAuth_Book_Controller extends Controller
{
    public function testauth()
    {
        $test= new ForeignKeyTest();
        $test->check();
        dd('working Good');
    }
}
