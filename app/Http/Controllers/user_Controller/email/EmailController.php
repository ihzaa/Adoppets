<?php

namespace App\Http\Controllers\user_Controller\email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function verifikasi_email()
    {
        return view('user/email/verifikasi_email');
    }

    public function diterima()
    {
        return view('user/email/diterima');
    }

    public function ditolak()
    {
        return view('user/email/ditolak');
    }

    public function pemberitahuan()
    {
        return view('user/email/pemberitahuan');
    }
}