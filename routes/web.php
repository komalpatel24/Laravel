<?php

use App\Http\Controllers\layout;
use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\marksheet;
use App\Http\Controllers\userform;

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
    return view("main");
});
 Route::get('page1', function () {
    return view('page1');
});
Route::get('page2', function () {
    return view('page2');
});
Route::get("marksheet/{sub1}/{sub2}/{sub3}/{sub4}/{sub5}/{sub6}",[marksheet::class,"getPercentage"]);
Route::get("layout",[Layout::class,"weblayout"]);
Route::view("gallary","gallary");
Route::view("main","main");

Route::view("irctcp1","irctcp1");
Route::view("irctcp2","irctcp2");
Route::view("irctcp3","irctcp3");

Route::post("registration",[userform::class,"getdata"]);
Route::view("registration", "Registration");
Route::post("login",[login::class,"display"]);
Route::view("login","login");

Route::view("noaccess", "noaccess");
Route::view("middleware", "middleware");



