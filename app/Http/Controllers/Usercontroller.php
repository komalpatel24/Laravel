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
       
    //     {
    //         $req->session()->put('user',$data['username']);
    //         return redirect('profile');
    // }
  
        // $data->validate(['username'=>'required','password'=>'required']);
        // $value=$data->input();
        // if ($value['username']==="admin" && $value['password']==="361999") {
        //     $data->session()->put('admin',"admin");
        //     return redirect('admin_dashboard');
        // }
        // else
         {
            $data->session()->put('users',$req['username']);
            return redirect('profile');
        }

     
       
    }
    
}


