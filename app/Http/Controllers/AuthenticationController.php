<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('pages.authentication'); // Make sure this view file exists
    }
}
