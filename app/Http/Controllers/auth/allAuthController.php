<?php

namespace App\Http\Controllers\auth;

use App\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class allAuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        $admin = Admin::where('username', $request->username)->first();
        if ($admin != []) {
            if (Hash::check($request->password, $admin->password)) {
                $remember = $request->has('remember') ? true : false;
                Auth::guard('admin')->loginUsingId($admin->id, $remember);
                if (Session::get('url.intended')) {
                    return redirect()->intended();
                } else {
                    return redirect()->route('landingpage');
                }
            } else {
                return back()->with('icon', 'error')->with('title', 'Maaf')->with('text', 'username atau password salah!');
            }
        }
        $user = User::where('username', $request->username)->first();
        if ($user != []) {
            if (!$user->verified) {
                return back()->with('icon', 'error')->with('title', 'Maaf')->with('text', 'Email belum diverifikasi!');
            }
            if (Hash::check($request->password, $user->password)) {
                $remember = $request->has('remember') ? true : false;
                Auth::guard('user')->loginUsingId($user->id, $remember);
                if (Session::get('url.intended')) {
                    return redirect()->intended();
                } else {
                    return redirect()->route('landingpage');
                }
            } else {
                return back()->with('icon', 'error')->with('title', 'Maaf')->with('text', 'username atau password salah!');
            }
        } else {
            return back()->with('icon', 'error')->with('title', 'Maaf')->with('text', 'username atau password salah!');
        }
    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } else if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }
        return redirect(route('landingpage'));
    }
}
