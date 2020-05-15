<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_view () {
        return view('admin.auth.login');
    }

    public function login_action (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:32|min:6'
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            return redirect('admin/category/list');
        } else {
            return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng!');
        }
    }
}
