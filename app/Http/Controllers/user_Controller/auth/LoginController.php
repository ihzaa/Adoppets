<?php

namespace App\Http\Controllers\user_Controller\auth;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = User::all();
        return view('user/auth/login');
    }

    // public function loginPost(Request $request)
    // {
    //     $this->validate($request, [
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);
    //     $user = User::where('username', $request->username)->first();
    //     if ($user != []) {
    //         if (Hash::check($request->password, $user->password)) {
    //             $remember = $request->has('remember') ? true : false;
    //             Auth::guard('admin')->loginUsingId($user->id, $remember);
    //             if (Session::get('url.intended')) {
    //                 return redirect()->intended();
    //             } else {
    //                 return redirect()->route('landingpage');
    //             }
    //         } else {
    //             return back()->with('icon', 'error')->with('title', 'Maaf')->with('text', 'username atau password salah!');
    //         }
    //     } else {
    //         return back()->with('icon', 'error')->with('title', 'Maaf')->with('text', 'username atau password salah!');
    //     }
    // }
}