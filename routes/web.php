<?php

use App\Http\Controllers\layout;
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
    return view('welcome');
});
 Route::get('page1', function () {
    return view('page1');
});
Route::get('page2', function () {
    return view('page2');
});
Route::get("marksheet/{sub1}/{sub2}/{sub3}/{sub4}/{sub5}/{sub6}",[marksheet::class,"getPercentage"]);
Route::get("layout",[Layout::class,"weblayout"]);
Route::view("nav","navbar");
Route::view("np2","np2");
Route::view("np3","np3");

Route::post("userform",[userform::class,"getdata"]);
Route::view("login", "userForm");

Route::view("noaccess", "noaccess");
Route::view("home", "home");



