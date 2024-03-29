<?php

namespace App\Http\Controllers\admin;

use App\Asset_posting;
use App\Blog;
use App\Category;
use App\Clinic_information;
use App\Http\Controllers\Controller;
use App\Kontak;
use App\posting;
use App\User;
use App\Vaccine;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function index()
    {
        $data = array();
        $data['counter'] = DB::select('SELECT (SELECT count(*) FROM kontaks) as kontaks, (SELECT count(*) FROM report_postings) as report_postings, (SELECT count(*) FROM report_blogs) as report_blogs, (SELECT count(*) FROM report_clinics) as report_clinics, (SELECT count(*) FROM users) as users, (SELECT count(*) FROM postings) as posting_hewan, (SELECT count(*) FROM blogs) as posting_blog, (SELECT count(*) FROM clinic_informations) as posting_clinic')[0];
        // dd($data);
        return view('admin/dashboard', compact('data'));
    }
    // dashboard admin
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    // POSTING HEWAN
    public function report_hewan()
    {
        $data = array();
        $data['reportList'] = DB::select('SELECT * FROM (SELECT p.id, p.title, (SELECT COUNT(*) FROM report_postings as rp WHERE rp.posting_id = p.id) as total_report FROM postings as p) subquery WHERE subquery.total_report > 0');
        return view('admin/report/hewan/index', compact('data'));
    }

    public function report_hewan_detail($id)
    {
        $data = array();
        $data['posting'] = posting::find($id);
        $data['reportList'] = DB::select('SELECT rp.*, u.name FROM report_postings as rp JOIN users as u ON u.id = rp.user_id where rp.posting_id = ' . $id);
        return view('admin/report/hewan/detail', compact('data'));
    }

    // POSTING BLOG
    public function report_blog()
    {
        $data = array();
        $data['reportList'] = DB::select('SELECT * FROM (SELECT p.id, p.title, (SELECT COUNT(*) FROM report_blogs as rp WHERE rp.posting_id = p.id) as total_report FROM blogs as p) subquery WHERE subquery.total_report > 0');
        return view('admin/report/blog/index', compact('data'));
    }

    public function report_blog_detail($id)
    {
        $data = array();
        $data['blog'] = Blog::find($id);
        $data['reportList'] = DB::select('SELECT rp.*, u.name FROM report_blogs as rp JOIN users as u ON u.id = rp.user_id where rp.posting_id = ' . $id);
        return view('admin/report/blog/detail', compact('data'));
    }

    public function report_klinik()
    {
        $data = array();
        $data['reportList'] = DB::select('SELECT * FROM (SELECT p.id, p.nama_klinik, (SELECT COUNT(*) FROM report_clinics as rp WHERE rp.posting_id = p.id) as total_report FROM clinic_informations as p) subquery WHERE subquery.total_report > 0');
        return view('admin/report/clinic/index', compact('data'));
    }

    public function report_klinik_detail($id)
    {
        $data = array();
        $data['clinic'] = Clinic_information::find($id);
        $data['reportList'] = DB::select('SELECT rp.*, u.name FROM report_clinics as rp JOIN users as u ON u.id = rp.user_id where rp.posting_id = ' . $id);
        return view('admin/report/clinic/detail', compact('data'));
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

    public function category()
    {
        $data = Category::all();
        return view('admin/category/index', compact('data'));
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        // dd($data);
        Category::destroy($data->id);
        return redirect(route('category_list'))->with('icon_delete', 'success')->with('title', 'Berhasil')->with('text', 'Kategori Berjhasil di Hapus!');
    }

    public function add_category(Request $request)
    {
        // dd($request->cat);
        $cat = Category::where('nama', 'like', $request->cat)->get();
        $resp = array();
        if (count($cat) != 0) {
            $resp['status'] = 'fail';
        } else {
            Category::create([
                'nama' => $request->cat,
            ]);
            $resp['status'] = 'ok';
            Session::flash('icon_delete', 'success');
            Session::flash('title', 'Berhasil');
            Session::flash('text', 'Kategori Berhasil Ditambahkan!');
        }
        return response()->json($resp);
    }
    public function posting_hewan()
    {
        $data = posting::all();
        return view('admin/posting/hewan/index', compact('data'));
    }

    public function posting_hewan_detail($id)
    {
        $data = posting::find($id);
        $user = User::pluck('name', 'id');
        $asset_posting = Asset_posting::where('posting_id', $id)->get();
        $edit = DB::select('SELECT p.*, (SELECT v.keterangan FROM vaccines as v where v.posting_id = p.id LIMIT 1) as keterangan, (SELECT v.tanggal FROM vaccines as v where v.posting_id = p.id LIMIT 1) as tanggal FROM postings as p WHERE p.id = ' . $id);
        $vaccines = Vaccine::where('posting_id', $id)->get();
        if (count($edit) == 0) {
            return redirect(route('landingpage'));
        }
        return view('admin/posting/hewan/detail', compact('data', 'asset_posting', 'edit', 'user', 'vaccines'));
    }

    public function posting_blog()
    {
        $data = Blog::all();
        return view('admin/posting/blog/index', compact('data'));
    }

    public function posting_blog_detail($id)
    {
        $data = Blog::find($id);
        $user = User::pluck('name', 'id');
        return view('admin/posting/blog/detail', compact('data', 'user'));
    }

    public function posting_clinic()
    {
        $data = Clinic_information::all();
        return view('admin/posting/klinik/index', compact('data'));
    }

    public function posting_clinic_detail($id)
    {
        $data = Clinic_information::find($id);
        $user = User::pluck('name', 'id');
        return view('admin/posting/klinik/detail', compact('data', 'user'));
    }

    public function pengguna()
    {
        $data = User::all();
        return view('admin/pengguna/index', compact('data'));
    }
}