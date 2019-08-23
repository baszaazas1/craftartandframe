<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function showHello($name){
        return 'Hello '.$name.'';   //ส่ง Paramiter ด้วยตัวแปร
    }

}
