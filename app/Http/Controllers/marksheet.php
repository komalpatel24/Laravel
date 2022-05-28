<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB as FacadesDB;

use Illuminate\Http\Request;

class marksheet extends Controller
{
    
   function getPercentage($sub1,$sub2,$sub3,$sub4,$sub5,$sub6){
    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6;
    echo "percentage is => " . $total/600*100;
        // function employee_data()
        // {
        //     $users =  FacadesDB::select("select * from customers");
        //     return view('users.admin_dashboard',["records" => $users]);

        // }
}
}
