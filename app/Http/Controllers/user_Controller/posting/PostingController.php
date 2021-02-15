<?php

namespace App\Http\Controllers\user_Controller\posting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostingController extends Controller
{
    public function index()
    {
        return view('user.submit.submit');
    }

    public function like(Request $request)
    {
        return response()->json($request);
    }
}