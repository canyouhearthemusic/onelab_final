<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        if (auth()->attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect('/')->with(['success' => 'You are successfully logged in.']);
        }
    }
}
