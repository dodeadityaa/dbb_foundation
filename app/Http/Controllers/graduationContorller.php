<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class graduationContorller extends Controller
{
    public function index()
    {
        return view('graduation');
    }
}
