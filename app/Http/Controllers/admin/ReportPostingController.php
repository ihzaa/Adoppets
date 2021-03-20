<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\posting;
use App\Report_posting;
use Illuminate\Http\Request;

class ReportPostingController extends Controller
{
    public function deleteReport($id)
    {
        Report_posting::where('posting_id', $id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Report berhasil dihapus!');
    }

    public function block($id)
    {
        posting::find($id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Posting berhasil dihapus!');
    }
}
