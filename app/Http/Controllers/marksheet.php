<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class marksheet extends Controller
{
    
   function getPercentage($sub1,$sub2,$sub3,$sub4,$sub5,$sub6){
    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6;
    echo "percentage is => " . $total/600*100;
}
}
