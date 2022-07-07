<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class supportController extends Controller
{
    public function privacy()
    {
        return view('support/privacy');
    }
    public function help()
    {
        return view('support/help');
    }
}
