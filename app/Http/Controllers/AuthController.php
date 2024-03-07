<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login ()
    {
        return view('auth.login');
    }

    public function dologin(Request $request)
    {
        $request ->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi setelah sholat',
            'password.required' => 'Password wajib diisi setelah sholat',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if (Auth::user()->role === 'admin') {
                return redirect('admin/home');
            }else if (Auth::user()->role == 'petugas') {
                return redirect('dashboard');
            }else if (Auth::user()->role == 'user') {
                return redirect('');
            } else {
                return redirect("login");
            }
        }else{
            return redirect("login");
        }
    }

    public function register()
    {
        return view('auth.register');
    }
    public function doregister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirmation' => Hash::make($request->password),
        ]);
        if ($user) {
            return redirect("");
        } else {
            return redirect("register")->withErrors('Inputan salah')->withInput();
        }
    }

    public function forgot()
    {
        return view('forgot');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}