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

    public function getLoginForm()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
    
          $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
          ];
          if (auth()->attempt($credentials)) {
            return redirect('/');
          }
          return view('users.login', ['invalid_credentials' => true]);
    }
}
