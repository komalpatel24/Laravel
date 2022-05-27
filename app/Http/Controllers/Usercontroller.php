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
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $data = $req->input( );
        $req->session()->put('user',$data['username']);

        return redirect('profile');
    }
}


