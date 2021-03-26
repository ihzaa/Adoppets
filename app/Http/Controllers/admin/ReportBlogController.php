<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Mail\BlockedBlogMail;
use App\Report_blog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ReportBlogController extends Controller
{
    public function deleteReport($id)
    {
        Report_blog::where('posting_id', $id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Report berhasil dihapus!');
    }

    public function block($id, Request $request)
    {
        $blog = Blog::find($id);
        $report = Report_blog::where('posting_id', $id)->get();
        $user = User::find($blog->user_id);
        Mail::to($user->email)->send(new BlockedBlogMail(['info' => $blog, 'user' => $user, 'report' => $report, 'message' => $request->message]));
        $blog->delete();
        Session::flash('icon', 'success');
        Session::flash('title', 'Berhasil');
        Session::flash('text', 'Posting berhasil dihapus!');
        return response()->json(['ok']);}
}
