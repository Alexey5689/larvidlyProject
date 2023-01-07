<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestLaraBook extends Controller
{
    function master(){
        return view('layouts.master');
    }
}
