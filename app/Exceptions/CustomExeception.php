<?php

namespace App\Exceptions;

use Exception;

class CustomExeception extends Exception
{
    public function index()
    {
        return response()->view('errors.404');
    }
}
