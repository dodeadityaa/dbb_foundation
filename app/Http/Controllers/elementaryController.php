<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class elementaryController extends Controller
{
    public function index()
    {
        return view('elementary');
    }
}
