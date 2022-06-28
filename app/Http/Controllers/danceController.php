<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class danceController extends Controller
{
    public function index()
    {
        return view('dance');
    }
}
