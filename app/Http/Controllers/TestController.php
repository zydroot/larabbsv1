<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        echo 'aa';
        $val = getenv('APP_DEBUG');
        $val1 = config('app.timezone');
        dd($val1);
    }
}
