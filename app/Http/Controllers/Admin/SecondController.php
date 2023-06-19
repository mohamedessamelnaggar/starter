<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public  function __construct()
    {
       $this -> middleware('auth')->except('showString2');

    }


    public function showString0(){

        return 'showString0';

    }
    public function showString1(){

        return 'showString1';

    }
    public function showString2(){

        return 'showString2';

    }
}
