<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getRegisterForm()
    {
        return view('users.registration');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $newUser = User::create($data);

        auth()->login($newUser);
        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }

    public function login()
    {
        
    }
}
