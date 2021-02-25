<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('auth.reg');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:255',
            'first name' => 'required|max:255',
            'last name' => 'max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        dd('store');


    }

}
