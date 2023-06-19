<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{

    public function  getIndex(){

        $data= []  ;
//        $data['name'] = 'mohamed essam' ;

        $obj = new \stdClass();

        $obj -> id = 10 ;
        $obj -> name = 'mohamed essam' ;
        $obj -> gender = 'male' ;

//        $data =['a'=> 'ahmed' , 'b' => 'emam' , 'c' => 'elnaggar'];


        return view('welcome')->with('data' , $data) ;
    }
}
