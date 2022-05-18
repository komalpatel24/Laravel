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
    function login(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user',$data['username']);
        // echo session('userName');
        return redirect('profile');
    }
}


