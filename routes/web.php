<?php

use App\Http\Controllers\layout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\marksheet;
use App\Http\Controllers\userform;
use App\Http\Controllers\dbtest;
use App\Http\Controllers\HttpRequest;
use App\Http\Controllers\Usercontroller;
use GuzzleHttp\Middleware;

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

})->Middleware('test');

 Route::get('page1', function () {
    return view('practice.page1');
});
Route::get('page2', function () {
    return view('practice.page2');
});
Route::get("marksheet/{sub1}/{sub2}/{sub3}/{sub4}/{sub5}/{sub6}",[marksheet::class,"getPercentage"]);
Route::get("layout",[Layout::class,"weblayout"]);
Route::view("gallary","gallary");
Route::view("main","main");
Route::view("home","home");
Route::view('page3','practice.page3');
Route::view("irctcp1","practice.irctcp1");
Route::view("irctcp2","practice.irctcp2");
Route::view("irctcp3","practice.irctcp3");

#Registeration & Login
Route::post("registration",[userform::class,"getdata"]);
Route::view("registration", "Registration")->Middleware('test');
Route::view("login","login");
Route::post("users",[userform::class,"getdata"]);
#
Route::post("usersData", [UserController::class, "fetchFormData"]);
Route::post("login", [UserController::class, "login"]);


Route::view('login','login')->middleware('login');
Route::view('profile','profile')->middleware('logout');

Route::get('/logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});

Route::view("webDesigning","webDesigning");

#Globle middleware
Route::view("noaccess", "noaccess");
Route::view("middleware", "middleware");
#group middleware
Route::group(['middleware' => ['admin']], function () {
    Route::view("gallary", "gallary");
    Route::view("main","main");
});

#Fetch data from database
Route::get('dbtest', [dbtest::class,"dbCheck"]);
Route::get('modalDB', [Usercontroller::class,"fetchData"]);
Route::get('Http', [HttpRequest::class,"info"]);



