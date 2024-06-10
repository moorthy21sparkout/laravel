<?php

use App\Exceptions\CustomExeception;
use App\Exceptions\Handler;

use App\Facades\test;
use App\Facades\testing;
use App\Http\Controllers\AddMemberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegsisterController;
use App\Http\Controllers\DelayController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
use App\Mail\FirstMail;

use App\Models\Comment;
use App\Models\Member;
use App\Models\Post;
use App\Models\Video;
use App\Notifications\NewVisit;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Mail;

use App\Models\CheckNotification; 

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
Route::post('validate', [UserController::class, 'user']);


Route::view('regsister', 'auth.regsister');
Route::post('store', [RegsisterController::class, 'store']);
Route::view('home', 'home')->middleware("can:");

Route::view('login', 'auth.login');
Route::post('authendication', [LoginController::class, 'authendication']);

Route::get('logout', [LoginController::class, 'logout']);


// {config error page}

Route::view('page', 'errors.404');

// {handling Exeception}

Route::get('in', [OrderController::class, 'index']);

Route::get('test', [CustomExeception::class, 'test']);


// Route::get('event',[TestController@test,'test']);

Route::view('main', 'event.index');
//Route::get('event', 'TestController@index');

Route::post('event', [TestController::class, 'test'])->name('event.index');


// {Schedule}

// Route::get('schedule', function () {
//     Log::info('schedule is started');
//     Member::where('email')->delete();
//     Log::info('deleted opration is completed');
//     return view('welcome');
// });

Route::get('schedule', function () {
    $filepath = storage_path('log/laravel.log');
    if (File::exists($filepath)) {
        dd($filepath);
        return "true";
    } else {
        return response('not found', 404);
    }
});

Route::get('send-mail', [EmailController::class, 'wellcomemail']);

Route::get('first-mail', function () {
    Mail::to('mo@gmail.com')->send(new FirstMail());
    return new FirstMail;
});


//{Queue in mail}

Route::get('queue', [SendMailController::class, 'index']);

//{delay message}

Route::get("delay", [DelayController::class, 'delay']);


Route::view('check', 'check');


// {polimorphic}

Route::get('poli', function () {
    $post = Post::find(1);
    $comment = new Comment;
    $comment->body = "hi bro this is good post";
    $post->comments()->save($comment);


    $video = Video::find(1);
    $comment = new comment;
    $comment->body = "hi bro this is the nice video";
    $video->comments()->save($comment);

    return " Post and Video Comment is Created";
});


//{collection}

Route::get('avg', function () {
    $data = [12, 3, 23];
    return collect($data)->average();
});


Route::get('/test-facade',function(){
  dd( testing::testMsg());
});

Route::get('notify', function () {
    $user =CheckNotification::first();
    $user->notify(new Newvisit("A new user has visited on your application."));
       dd("working Good");
    });