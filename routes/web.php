<?php

use App\Http\Controllers\productcontroller;
use App\Http\Controllers\workercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StuentController;
use App\Models\Address;
use App\Models\Home;
use Illuminate\Support\Facades\Response;
use App\Models\owner;
use App\Models\clent;
use App\Models\bikecompany;
use App\Models\bikemodel;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('worker', [workercontroller::class, 'index'])->name('worker.index');//url,controllerclass and function
// Route::get('worker/create', [workercontroller::class, 'create'])->name('worker.create');
// Route::post('worker', [workercontroller::class, 'store'])->name('worker.store');
// Route::get('worker/{worker}/edit', [workercontroller::class, 'edit'])->name('worker.edit');
// Route::put('worker/{worker}/update', [workercontroller::class, 'update'])->name('worker.update'); //{worker}->worker parameter just like  id 1,id 2,.....
// Route::delete('worker/{worker}/destroy', [workercontroller::class, 'destroy'])->name('worker.destroy');

// Route::resource('product',productcontroller::class);
// Route::get('user/{name}',function($name){
//     return view('user',['name'=>$name]);
// });
// Route::get('user/{name}',function($name){
//     return view('user',compact('name'));
// });
// Route::get('index',[MemberController::class,'index']);
// Route::get('index',[StuentController::class,'index'])->name('student.index');
// Route::get('index/create',[StuentController::class,'create'])->name('student.create');
// Route::post('index/store',[StuentController::class,'store'])->name('student.store');
Route::get('index',function(){
    $data=Address::with('address')->whereId(1)->first();
    return response()->json($data);
  
});
Route::get('data',function(){
    $data=Home::with('home')->whereId(1)->get();
    return response()->json($data);
});
Route::get('owner',function(){
    $info=clent::with('clint')->whereId(1)->first();
    return response()->json($info);

});
Route::get('demo',function(){
    $info=owner::with('owner')->whereId(1)->first();
    return response()->json($info);

});
Route::get('info',function(){
    $data=bikecompany::with('company')->whereId('1')->get();
    return response()->json($data);
});
Route::get('new',function(){
    $data=bikemodel::with('model')->whereId('2')->get();
    return response()->json($data);
});