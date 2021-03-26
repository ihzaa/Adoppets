<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\BlockedPostMail;
use App\posting;
use App\Report_posting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ReportPostingController extends Controller
{
    public function deleteReport($id)
    {
        Report_posting::where('posting_id', $id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Report berhasil dihapus!');
    }

    public function block($id, Request $request)
    {
        $post = posting::find($id);
        $report = Report_posting::where('posting_id', $id)->get();
        $user = User::find($post->user_id);
        Mail::to($user->email)->send(new BlockedPostMail(['info' => $post, 'user' => $user, 'report' => $report, 'message' => $request->message]));
        $post->delete();
        Session::flash('icon', 'success');
        Session::flash('title', 'Berhasil');
        Session::flash('text', 'Posting berhasil dihapus!');
        return response()->json(['ok']);
    }
}
