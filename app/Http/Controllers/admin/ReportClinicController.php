<?php

namespace App\Http\Controllers\admin;

use App\Clinic_information;
use App\Http\Controllers\Controller;
use App\Mail\BlockedClinicMail;
use App\Report_clinic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReportClinicController extends Controller
{
    public function deleteReport($id)
    {
        Report_clinic::where('posting_id', $id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Report berhasil dihapus!');
    }

    public function block($id)
    {
        $clinic = Clinic_information::find($id);
        $report = Report_clinic::where('posting_id', $id)->get();
        $user = User::find($clinic->user_id);
        Mail::to($user->email)->send(new BlockedClinicMail(['info' => $clinic, 'user' => $user, 'report' => $report]));
        $clinic->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Clinic berhasil dihapus!');
    }
}
