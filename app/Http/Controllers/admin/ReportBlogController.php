<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Report_blog;
use Illuminate\Http\Request;

class ReportBlogController extends Controller
{
    public function deleteReport($id)
    {
        Report_blog::where('posting_id', $id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Report berhasil dihapus!');
    }

    public function block($id)
    {
        Blog::find($id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Blog berhasil dihapus!');
    }
}
