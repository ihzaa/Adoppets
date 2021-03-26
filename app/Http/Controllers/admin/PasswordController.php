<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function get()
    {
        return view('admin.changePassword');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'old' => 'required',
            'new' => 'required|min:6'
        ]);
        $user = Admin::find(Auth::guard('admin')->user()->id);
        if (Hash::check($request->old, $user->password)) {
            $user->password = Hash::make($request->new);
            $user->save();
            return redirect(route('admin.change.password.get'))->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Password Berhasil Diubah!');
        } else {
            return redirect(route('admin.change.password.get'))->with('icon', 'error')->with('title', 'Gagal')->with('text', 'Password Lama Salah!');
        }
    }
}
