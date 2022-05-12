<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpRequest extends Controller
{
    
    function info()
    {
        $collection = Http::get('https://reqres.in/api/users?page=1');
        return view('apidata', ['collection' => $collection['data']]);
    }
}
