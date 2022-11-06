<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController;

Route::resource('student', StudentController::class);
Route::resource('major', MajorController::class);
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('studentlist');
//Route::resource('student', App\Http\Controllers\StudentController::class);
//Route::get('/student',[App\Http\Controllers\StudentController::class, 'index']);




