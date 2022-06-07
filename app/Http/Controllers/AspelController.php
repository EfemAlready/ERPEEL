<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspelController extends Controller
{
    function show()
    {
        return view('listaspel');
    }
}
