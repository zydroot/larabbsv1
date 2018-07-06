<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        //echo 'aa';

        /*$val2 = route_class();
        dd($val2);*/
        return view('layouts.app');

    }
}
