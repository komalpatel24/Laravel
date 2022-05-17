<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Usercontroller extends Controller
{
    //
    function fetchData()
    {
        return User::all();
    }
    function fetchFormData(Request $req)
    {
        return $req->input();
    }
    function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user',$data['userName']);
        echo session('userName');
        return redirect('profile');
    }
}


