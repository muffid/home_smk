<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedesa\Session;
use Illuminate\Support\Facedes\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function autentikasi(Request $request)
    {
        // dd($request);

        $credentials= $request->validate([
            'email' => ['required','email'],
            'password'=>['required']
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect()->intended('admin/');
        }
        Session::flash('status', 'failed');
        return redirect('admin/login');
    }

    public function cek(Request $request)
    
    { 
        dd($request);
        $cek = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($cek)) {
            $request->session()>regenerate();
            return redirect()->intended('admin/');
        }
        Session::flash('status', 'failed');
        return redirect('/admin/login');
    }
}
