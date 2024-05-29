<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomExeception;

class OrderController extends Controller
{
    public function index()
    {
        $x = 10;
        $y = 1;
        try {
            
            if ($x > $y) {
               
                throw new CustomExeception("Y is bigger");
              }//else{
            //   throw new CustomExeception("X is bigger");
            //}
        } catch (CustomExeception $e) {
           
           
            return abort(404);
        }
        // dd("Y is bigger");
    }
}
