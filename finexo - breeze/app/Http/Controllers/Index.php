<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    //
    function indexPage()
    {
        return view('index');
    }

    function aboutPage()
    {
        return view('about');
    }
    function whyPage()
    {
        return view('why');
    }
    function teamPage()
    {
        return view('team');
    }
   
}
