<?php

namespace App\Http\Controllers\user_Controller\auth;

use App\Http\Controllers\Controller;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class verifyAccountController extends Controller
{
    public function verifyUser($token)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } else if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }
        $verifyUser = VerifyUser::where('token', $token)->first();
        if (isset($verifyUser)) {
            $user = $verifyUser->user;
            if (!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            } else {
                $status = "Your e-mail is already verified. You can now login.";
            }
        } else {
            return redirect(route('get_login'))->with('warning', "Sorry your email cannot be identified.");
        }
        return redirect(route('get_login'))->with('status', $status);
    }
}
