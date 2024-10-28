<?php

// app/Http/Controllers/HelpController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        return view('pages.help'); // Ensure you have this view in resources/views/help/index.blade.php
    }
}
