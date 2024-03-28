<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

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

        throw ValidationException::withMessages(['password' => 'The password could not be verified.']);
    }
}
