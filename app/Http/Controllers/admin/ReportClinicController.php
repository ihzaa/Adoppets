<?php

namespace App\Http\Controllers\admin;

use App\Clinic_information;
use App\Http\Controllers\Controller;
use App\Report_clinic;
use Illuminate\Http\Request;

class ReportClinicController extends Controller
{
    public function deleteReport($id)
    {
        Report_clinic::where('posting_id', $id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Report berhasil dihapus!');
    }

    public function block($id)
    {
        Clinic_information::find($id)->delete();
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Clinic berhasil dihapus!');
    }
}
