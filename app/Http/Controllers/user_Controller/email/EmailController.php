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

    public function blokir_hewan()
    {
        return view('user/email/blokir_hewan');
    }

    public function blokir_blog()
    {
        return view('user/email/blokir_blog');
    }

    public function blokir_clinic()
    {
        return view('user/email/blokir_clinic');
    }

    public function delete_hewan_admin()
    {
        return view('user/email/delete_hewan');
    }

    public function delete_blog_admin()
    {
        return view('user/email/delete_blog');
    }

    public function delete_clinic_admin()
    {
        return view('user/email/delete_clinic');
    }
}