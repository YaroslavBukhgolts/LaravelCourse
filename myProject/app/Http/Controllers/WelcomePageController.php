<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    public function showWelcome()
    {
        return view('welcomePage');
    }
}
