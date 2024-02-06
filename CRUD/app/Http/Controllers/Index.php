<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    //
    function viewIndex(){
        return view('index');
    }

    function data(Request $d)
    {
        return $d->email;
    }




}
