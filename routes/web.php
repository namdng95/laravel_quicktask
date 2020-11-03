<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

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
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', [HomeController::class, 'changeLanguage'])->name('user.change-language');

    Route::get('/', function () {
        return view('tasks');
    })->name('task');

    Route::resource('tasks', TaskController::class);
    
});
