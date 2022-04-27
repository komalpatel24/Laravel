<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    function display(Request $dis)
    {

        $dis->validate(['username' => 'required | min:5 | max:10',
                            'password' => 'required | min:4'
        ]);
        return $dis->input();
        
    }
}
