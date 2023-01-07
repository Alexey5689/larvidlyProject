<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControl extends Controller
{
    function index(){
       return view('layouts.index');

    }
}
