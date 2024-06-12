<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
class CountController extends Controller
{
    public function index_each()
    {
        $collect = Count::all();
        //dd($collect);
        $collect->each(function ($count) {
            return $count->name . ' ' . $count->email . ' ' . $count->age . ' ' . PHP_EOL;
        })->toArray();

        foreach ($collect as $collect) {
            return $collect;
        }
    }
    public function index_map()
    {
        $collect = Count::all();
        $results = $collect->map(function ($count) {
            return [
                'name' => $count->name,
                'email' => $count->email,
                'age' => $count->age,
                'check' => $count->name . ' ' . $count->email . ' ' . $count->age . ' ',
            ];
        })->toArray();
        foreach ($results as $check) {
            return $check['check'];
        }
    }
    public function index_filter()
    {
        
        // $collect = Count::get();
        // $results = $collect->filter(function ($item) {
        //     return $item->age > 30;
        // });
        // dd($results);
        $collect=collect(['sudhan','keasavan','jegathis','moorthy']);
        dump('working well');
       $result= collect();
       $count=4;
       foreach ($collect as $item) {
         
        $result->push(Str::plural($item, $count));
    }
    
      dump($result->all());

      dd("hello buddy ");
    }

    
}
