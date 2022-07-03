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
            'courses' => 'required',
            'gender' => 'required',
            'age' => 'required | numeric | min:1',
            'date_of_birth' => 'required',
            'qualification' => 'required ',
            'email' => 'required | email',
            'mobile_no' => 'required | numeric',
            'Imagefile' => 'required'
        ]);



        DB::table('users')->insert([
            "firstname" => $data->input('firstname'),
            "lastname" => $data->input('lastname'),
            "password" => $data->input('password'),
            "confirm_password" => $data->input('confirm_password'),
            "courses" => $data->input('courses'),
            "gender" => $data->input('gender'),
            "age" => $data->input('age'),
            "date_of_birth" => $data->input('date_of_birth'),
            "qualification" => $data->input('qualification'),
            "email" => $data->input('email'),
            "mobile_no" => $data->input('mobile_no'),
            "Imagefile" => $data->input('Imagefile'),

         ]);
        return redirect('login1');
    }
}
