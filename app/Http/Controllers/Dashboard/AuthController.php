<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin) {
            if ($admin->status === 0) {
                return back()->with('error', 'Access denied');
            }
        }

        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect(route('dashboard.home'));
        }
        return back();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect(route('dashboard.login'));
    }
}
