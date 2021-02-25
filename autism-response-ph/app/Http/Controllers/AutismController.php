<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutismController extends Controller
{
    public function index()
    {
        return view('contents.autism');
    }
}
