<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TestERMController;
use App\Http\Controllers\ERMController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/aboutus',function(){
    return view('about');
});
Route::get('/doctors',function(){
    return view('doctors');
});
Route::get('/blog',function(){
    return view('blog');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/blog-details',function(){
    return view('blog-details');
});
Route::resource('/test',TestController::class);
Route::resource('/',HomeController::class);
Route::resource('/admin/doctor',DoctorController::class);
Route::view('/admin','admin.index');
Route::get('/erm',[TestERMController::class,'show']);
Route::get('/erm1',[ERMController::class,'display']);