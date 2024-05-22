<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::view('new','firstpage');
//Route::get('list/{id}',[DeviceController::class,'getlist']);
Route::get('list',[DeviceController::class,'getlist']);
Route::post('store',[DeviceController::class,'store']);
Route::put('update',[DeviceController::class,'update']);
Route::delete('delete/{id}',[DeviceController::class,'delete']);
Route::get('search/{name}',[DeviceController::class,'search']);
Route::post('check',[DeviceController::class,'testdata']);
