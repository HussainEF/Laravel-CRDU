<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollingController extends Controller
{
    //
    function pollForm(){
        return view('polling_form');
    }
}
