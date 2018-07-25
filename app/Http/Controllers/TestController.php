<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        //echo 'aa';

        /*$val2 = route_class();
        dd($val2);*/
        $now = Carbon::now()->toDateTimeString();
        dd($now);
        return view('layouts.app');

    }
}
