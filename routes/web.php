<?php

use App\Http\Controllers\productcontroller;
use App\Http\Controllers\workercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;




Route::get('/', function () {
    return view('welcome');
});
Route::get('worker', [workercontroller::class, 'index'])->name('worker.index');//url,controllerclass and function
Route::get('worker/create', [workercontroller::class, 'create'])->name('worker.create');
Route::post('worker', [workercontroller::class, 'store'])->name('worker.store');
Route::get('worker/{worker}/edit', [workercontroller::class, 'edit'])->name('worker.edit');
Route::put('worker/{worker}/update', [workercontroller::class, 'update'])->name('worker.update'); //{worker}->worker parameter just like  id 1,id 2,.....
Route::delete('worker/{worker}/destroy', [workercontroller::class, 'destroy'])->name('worker.destroy');

Route::resource('product',productcontroller::class);
Route::get('user/{name}',function($name){
    return view('user',['name'=>$name]);
});
Route::get('user/{name}',function($name){
    return view('user',compact('name'));
});
Route::get('index',[MemberController::class,'index']);