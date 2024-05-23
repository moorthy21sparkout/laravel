<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserAuth;
use Illuminate\Auth\Events\Logout;
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
Route::get('list',[MemberController::class,'list']);
Route::get('upload',function(){
    return view('file-upload');
})->name('file.uplode.form');
Route::post('fileupload',[FileUploadController::class,'store'])->name('file.upload');

Route::get('file/show',[FileUploadController::class,'show']);
Route::get('index',[PageController::class,'index']);
Route::get('about',[PageController::class,'about']);
Route::view('login','login');
Route::view('profile','profile');
Route::post('user',[UserAuth::class,'UserLogin']);
Route::get('logout',function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});