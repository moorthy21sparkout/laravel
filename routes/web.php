<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('month/{num}',function($num){
//     if($num==1){
//         return "first month";
//     }
//     elseif($num==2){
//         return "secound month";
//     }
//     elseif($num=3){
//         return "third month";
//     }
// })->middleware('month');
// Route::view('first','firstpage');
// Route::view('secound','secoundpage');
// Route::view('third','thirdpage');

