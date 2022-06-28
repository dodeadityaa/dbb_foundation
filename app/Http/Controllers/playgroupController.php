<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class playgroupController extends Controller
{
    public function index()
    {
        return view('playgroup');
    }
}
