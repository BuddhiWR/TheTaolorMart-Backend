<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModificationController extends Controller
{
    public function index()
    {
        return view('pages.modifications'); // Ensure this view file exists
    }
}
