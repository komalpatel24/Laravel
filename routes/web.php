<?php

use App\Http\Controllers\layout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\marksheet;
use App\Http\Controllers\userform;
use App\Http\Controllers\dbtest;
use App\Http\Controllers\HttpRequest;
use App\Http\Controllers\login;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\operator;
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
Route::view("demo","practice.demo");
Route::get("marksheet/{sub1}/{sub2}/{sub3}/{sub4}/{sub5}/{sub6}",[marksheet::class,"getPercentage"]);
Route::get("layout",[Layout::class,"weblayout"]);
Route::view("main","main");
Route::view("home","home");
Route::view('page3','practice.page3');
Route::view("irctcp1","practice.irctcp1");
Route::view("irctcp2","practice.irctcp2");
Route::view("irctcp3","practice.irctcp3");
#Fetch data from database
Route::get('dbtest', [dbtest::class,"dbCheck"]);
Route::get('modalDB', [Usercontroller::class,"fetchData"]);
Route::get('Http', [HttpRequest::class,"info"]);
#Globle middleware
Route::view("noaccess", "practice.noaccess");
Route::view("middleware", "practice.middleware");
#group middleware
Route::group(['middleware' => ['admin']], function () {
    Route::view("gallary", "gallary");
    Route::view("main","main");
    Route::view('contactus','contactus');
});



#PROJECT ROUTE
Route::post("usersData", [UserController::class, "fetchFormData"]);
Route::view("webDesigning","webDesigning");
Route::view("gallary","gallary");

#Registeration & Login
Route::post("registration",[userform::class,"getdata"]);
Route::view("registration", "Registration")->Middleware('login');
Route::post("user",[userform::class,"getdata"]);
Route::view('logout',[logout::class,"logout_check"]);

// Route::view("login","login1");
Route::post("login",[login::class,"login_check"]);
Route::view('login','login1')->middleware('login');
Route::view("dashboard","admin_dashboard")->middleware('logout');
Route::view('profile','profile')->middleware('logout');


// Route::get('/logout', function () {
//     if(session()->has('user')){
//         session()->pull('user');
//     }return redirect('login');

//     // if (session()->has('admin')) {
//     //     session()->pull('admin');
//     //     return redirect('login');
//     // }
// });








