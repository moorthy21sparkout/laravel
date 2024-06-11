<?php

namespace App\Http\Controllers;

use App\Models\CacheUser;
use App\Models\StoreCatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheUserController extends Controller
{
    public function index(){
        $cachekey='video_1';
        $cacheduration=20;
        $post=CacheUser::find(1);
        //catch::put($key,$vlaue,$duration)
        Cache::put($cachekey, $post, $cacheduration);
        //dd("working Good");
        // cache::get($cachekey);
        $this->storecache(['catchkey'=>$cachekey,'cacheduration'=> $cacheduration]);
    }
    public function storecache($data){
        $storecache=new StoreCatch();
        $storecache->cache_key = $data['catchkey'];
        $storecache->duration= $data['cacheduration'];
        $storecache->save();
        dd('working Good');

    }
}
