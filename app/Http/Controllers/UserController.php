<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        if(Auth::check()) {
            return redirect('/');
        }

        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $data = [
            'email' => $request->input('userEmail'),
            'password' => $request->input('userPassword'),
        ];

        if(Auth::attempt($data)) {
            return redirect('/admin/ticket');
        }

        $request->session()->flash('error', 'Email atau password salah!');
        return $this->login();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
