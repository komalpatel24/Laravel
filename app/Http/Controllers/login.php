<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    //
    function login_check(Request $data){
        
        
        $data->validate(['username'=>'required',
                        'password'=>'required'
                    ]);

        $value=$data->input();
        
        if ($value['username']==="admin" && $value['password']==="361999") {
            $data->session()->put("admin","admin");
            return redirect('admin_dashboard');
        }
        else {
            $data->session()->put('user',$value['username']);
            return redirect('profile');
        }
      
    }
}
