<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}