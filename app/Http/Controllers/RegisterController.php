<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::factory()->create($request->validated());

        if ($user) {
            auth()->login($user);

            return to_route('home')->with(['success' => 'Account has been created.']);
        }
    }
}
