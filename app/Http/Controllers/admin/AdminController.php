<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Kontak;
use App\User;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin/dashboard');
    }
    // dashboard admin
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    // POSTING HEWAN
    public function report_hewan()
    {
        return view('admin/report/hewan/index');
    }

    public function report_hewan_detail()
    {
        return view('admin/report/hewan/detail');
    }

    // POSTING BLOG
    public function report_blog()
    {
        return view('admin/report/blog/index');
    }

    // contact list
    public function contact_list()
    {
        $data = Kontak::all();
        $user = User::pluck('name', 'id');
        return view('admin/contact/index', compact('data', 'user'));
    }

    // contact delete
    public function delete($id)
    {
        $data = Kontak::find($id);
        Kontak::destroy($data->id);
        return redirect(route('contact_list'))->with('icon_delete', 'success')->with('title', 'Berhasil')->with('text', 'Contact Berjhasil di Hapus!');
    }

    public function contact_detail($id)
    {
        $data = Kontak::find($id);
        $user = DB::select('SELECT name, email, nomor_telpon, no_wa FROM users WHERE id = ' . $id, [1]);
        return view('admin/contact/detail', compact('data', 'user'));
    }

    public function report_klinik_detail()
    {
        return view('admin/report/clinic/detail');
    }

    public function report_klinik()
    {
        return view('admin/report/clinic/index');
    }

    public function report_blog_detail()
    {
        return view('admin/report/blog/detail');
    }
}