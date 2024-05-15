<?php

use App\Models\Bikecompony;
use App\Models\Bikemodels;
use App\Models\Dress;
use App\Models\Employ;
use App\Models\Role;
use App\Models\owner;
use App\Models\worker;
use Illuminate\Support\Facades\Route;
use App\Models\Dresscategory;
use App\Http\Controllers\CollectionContrller;
use Illuminate\Support\Collection;
use App\Http\Controllers\MemberController;

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
Route::get('index', function () {
    $data = owner::with('ownerinfo')->whereId(1)->get();
    return response()->json($data);
});
Route::get('next', function () {
    $dt = worker::with('workerinfo')->whereId(1)->get();
    return response()->json($dt);
});
Route::get('company', function () {
    $data = Bikecompony::with('company')->whereId(1)->get();
    return response()->json($data);
});
Route::get('model', function () {
    $dt = Bikemodels::with('model')->whereId(7)->get();
    return response()->json($dt);
});
Route::get('/new', function () {
    $data = Employ::with('role')->whereId(2)->get();
    return response()->json($data);
});
Route::get('role', function () {

    $data = Role::with('employ')->whereId(1)->get();
    return response()->json($data);
});
Route::get('dress', function () {
    $data = Dresscategory::with('dress')->find(1);
    $dt = $data->dress;
    dd($dt);
});
Route::get('filterdata', [CollectionContrller::class, 'filterdata']);
Route::get('collect', [CollectionContrller::class, 'all']);

Route::get('/chunk',function(){
$collect=collect([12,23,24,25]);
$chunk=$collect->chunk(3);
return $chunk->all();
});
//different between the two arrays
Route::get('dif',function(){
    $collection=collect([1,2,3,34,5,6]);
    $dif=$collection->diff([1,4,5,7,3,3]);
    return $dif->toJson();
});
Route::get('member',[MemberController::class,'index']);
Route::get('mutator',[MemberController::class,'next']);


