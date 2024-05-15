<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionContrller extends Controller
{
   public function filterdata(){
    $data=[1,2,3,4,5,6];
    $collection=collect($data);
    $filter=$collection->filter(function($value){
        return $value >2;
    });
    return view('collection.filter_data',['filter'=>$filter]);

    
   }
   public function all(){
        $collect=collect([1,2,3])->all();
        dd($collect);
        return view('collection.collect',['collect'=>$collect]);

   }

}
