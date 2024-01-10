<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\TestingController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('movie',MovieController::class)->middleware('auth');

Route::get('/testing',[TestingController::class,'index'])->name('testing.index');
Route::get('/testing/create',[TestingController::class,'create'])->name('testing.create');
Route::post('/',[TestingController::class,'store'])->name('testing.store');
Route::get('/testing/edit/{testing}',[TestingController::class,'edit'])->name('testing.edit');
Route::put('/testing/update/{testing}',[TestingController::class,'update'])->name('testing.update');
Route::delete('/testing/delete/{testing}',[TestingController::class,'delete'])->name('testing.destory');
Route::get('/testing/show/{testing}',[TestingController::class,'show'])->name('testing.show');