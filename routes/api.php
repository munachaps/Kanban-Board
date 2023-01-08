<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//  Board API Routes
Route::get('boards/{user_id}', 'App\Http\Controllers\BoardController@index');
Route::get('board/{id}/{user_id}', 'App\Http\Controllers\BoardController@show');
Route::post('board/{user_id}', 'App\Http\Controllers\BoardController@store');
Route::put('board/{user_id}', 'App\Http\Controllers\BoardController@update');
Route::delete('board/{id}/{user_id}', 'App\Http\Controllers\BoardController@destroy');

//  Task API Routes
Route::get('tasks/{user_id}', 'App\Http\Controllers\TaskController@index');
Route::get('task/{id}/{user_id}', 'App\Http\Controllers\TaskController@show');
Route::post('task/{user_id}', 'App\Http\Controllers\TaskController@store');
Route::put('task/{user_id}', 'App\Http\Controllers\TaskController@update');
Route::delete('task/{id}/{user_id}', 'App\Http\Controllers\TaskController@destroy');
