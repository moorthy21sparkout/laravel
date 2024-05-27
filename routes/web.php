<?php

use App\Http\Controllers\AddMemberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegsisterController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

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
Route::get('month/{num}', function ($num) {
    if ($num == 1) {
        return "first month";
    } elseif ($num == 2) {
        return "secound month";
    } elseif ($num = 3) {
        return "third month";
    }
})->middleware('month');
Route::view('first', 'firstpage');
Route::view('secound', 'secoundpage');
Route::view('third', 'thirdpage');
Route::get('list', [MemberController::class, 'list']);
Route::get('upload', function () {
    return view('file-upload');
})->name('file.uplode.form');
Route::post('fileupload', [FileUploadController::class, 'store'])->name('file.upload');

Route::get('file/show', [FileUploadController::class, 'show']);
Route::get('index', [PageController::class, 'index']);
Route::get('about', [PageController::class, 'about']);
Route::view('login', 'login');
Route::view('profile', 'profile');
Route::post('user', [UserAuth::class, 'UserLogin']);
Route::get('logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
});
Route::view('add', 'add');
Route::post('addmember', [AddMemberController::class, 'add']);
Route::get('set', function () {
    $responce = new Response('hello buddy cookie has been set ...!');
    $responce->cookie('abc', 'sudhan', 60000);
    //headers -> not only send the main content send the exter information 
    return $responce;
});
Route::get('get', function (Request $request) {
    $user = $request->cookie('abc');
    return "hello $user";
});
Route::get('set/cookie', function () {
    $value = 'sudhan';
    $minutes = 60;

    $cookie = Cookie::make('name', $value, $minutes);

    return response('Cookie has been set')->cookie($cookie);
});
Route::get('forget', function () {
    $responce = new Response('good bye');
    $responce->cookie('abc', '', -1);
    return $responce;
});
Route::get('encrypt', function () {
    $responce = new Response('sudhan');
    $responce->cookie('token', encrypt('token_type'), 60);
    return $responce;
});
Route::get('decrypt', function (Request $request) {
    $token = decrypt($request->cookie('token'));
    return "the decrpt value is : $token";
});
Route::get('multi', function () {
    $responce = new Response('mutitype cookies');
    $responce->cookie('name1', 'sudhan', 60);
    $responce->cookie('name2', 'sam', 60);
    $responce->cookie('name3', 'ram', 60);
    return $responce;
});
Route::get('name1', function (Request $request) {
    $name = $request->cookie('name1');
    return "hello $name";
});
Route::view('form', 'user');
Route::post('validate',[UserController::class,'user']);


Route::view('regsister','auth.regsister');
Route::post('store',[RegsisterController::class,'store']);
Route::view('home','home');

Route::view('login','auth.login');
Route::post('authendication',[LoginController::class,'authendication']);

Route::get('logout',[LoginController::class,'logout']);