<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\DB;


class userform extends Controller
{
    function getdata(Request $data)
    {

        $data->validate([
            'firstname' => 'required | min:3 | max:10 | alpha',
            'lastname' => 'required | min:3 | max:10 | alpha',
            'password' => 'required | max:10',
            'confirm_password' => 'required | max:10',
            'department' => 'required',
            'gender' => 'required',
            'age' => 'required | numeric | min:1',
            'date_of_birth' => 'required',
            'qualification' => 'required ',
            'email' => 'required | email',
            'mobile_no' => 'required | numeric',
            'Imagefile' => 'required'
        ]);

        return redirect('login');
    }
}
