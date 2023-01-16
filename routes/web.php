<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/schedules', 'ScheduleController@index');
    Route::post('/schedules', 'ScheduleController@store');
    Route::get('/schedules/create', 'ScheduleController@create');
    Route::get('/schedules/{schedule}/edit', 'ScheduleController@edit');
    Route::patch('/schedules/{schedule}', 'ScheduleController@update');
    Route::delete('/schedules/{schedule}', 'ScheduleController@destroy');

    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::get('/users/create', 'UserController@create');
    Route::get('/users/{user}/edit', 'UserController@edit');
    Route::patch('/users/{user}', 'UserController@update');
    Route::delete('/users/{user}', 'UserController@destroy');

    Route::get('/logs', 'LogController@index');
});
