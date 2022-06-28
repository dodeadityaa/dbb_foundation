<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daycareController extends Controller
{
    public function index()
    {
        return view('daycare');
    }
}
