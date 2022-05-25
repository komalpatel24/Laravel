<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    //
    function uploadFile(Request $req)
    {
        $filename = $req->file('image')->getClientOriginalName();
        // $req->file('image')->storeAs('images', $filename);
        // $upload = $req->file('image')->store('images');
        $upload =  $req->file('image')->storeAs('images', $filename);
        if ($upload) {
            return redirect('uploadfile');
        }
    }
}
