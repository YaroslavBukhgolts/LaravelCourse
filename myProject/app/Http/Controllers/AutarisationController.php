<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutarisationController extends Controller
{
    public function showAutarisation()
    {
        return view('autarisationPage');
    }
}
