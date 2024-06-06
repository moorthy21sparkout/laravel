<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class testing extends Facade
{
    public static function getFacadeAccessor(){
        return 'testing';
    }
}

