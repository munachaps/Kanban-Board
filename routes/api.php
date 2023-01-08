<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StatusController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', function () {
    return redirect()->route('tasks.index');
})->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');
    Route::get('addtask', 'App\Http\Controllers\TaskController@addtask')->name('addtask');
    Route::post('tasks', 'App\Http\Controllers\TaskController@store')->name('tasks.store');
    Route::put('tasks/sync', 'App\Http\Controllers\TaskController@sync')->name('tasks.sync');
    Route::put('tasks/{task}', 'App\Http\Controllers\TaskController@update')->name('tasks.update');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('statuses', 'App\Http\Controllers\StatusController@store')->name('statuses.store');
    Route::put('statuses', 'App\Http\Controllers\StatusController@update')->name('statuses.update');
});

