<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(["guest"]);
    }

    public function index ()
    {
        return view('auth.reg');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'max:255',
            'age' => 'max:255',
            'sex' => 'max:255',
            'city' => 'max:255',
            'phone' => 'max:255',
            'regas' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'age' => $request->age,
            'sex' => $request->sex,
            'city' => $request->city,
            'number' => $request->phone,
            'regas' => $request->regas,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

}