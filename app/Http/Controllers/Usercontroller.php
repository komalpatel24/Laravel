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
       


        //  if ($data['username'] === 'admin' && $data['password'] === '123') 
        //  {
        //      $data->session()->put('admin', 'admin');
        //      return redirect('admin_dashboard');
        //  } 
        //  else 
         {
                 $req->session()->put('user',$data['username']);
                 return redirect('profile');
         }
    }
    
}


