<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function terms()
    {
        return view('pages.terms'); // Create a view file at resources/views/terms.blade.php
    }
}
