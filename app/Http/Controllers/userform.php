<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userform extends Controller
{
    function getdata(Request $req)
    {

        $req->validate([
            'firstname' => 'required| min:3 | max:10 | alpha',
            'lastname' => 'required | min:3 | max:10 | alpha',
            'password' => 'required | max:8',
            'confirm_password' => 'required | max:8',
            'department' => 'required',
            'gender' => 'required',
            'age' => 'required | numeric | min:1',
            'date_of_birth' => 'required',
            'salary' => 'required | numeric',
            'email' => 'required | email',
            'mobile_no' => 'required | numeric'
        ]);
        return $req->input();
    }
}
