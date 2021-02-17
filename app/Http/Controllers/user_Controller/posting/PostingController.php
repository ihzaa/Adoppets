<?php

namespace App\Http\Controllers\user_Controller\posting;

use App\Blog;
use App\Clinic_information;
use App\Http\Controllers\Controller;
use App\posting;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index()
    {
        return view('user.submit.submit');
    }

    public function like(Request $request)
    {
        return response()->json($request);
    }

    //posting hewan peliharaan
    public function index_posting()
    {
        $data = posting::all();
        // dd($data);
        return view('user.submit.submitposting', compact('data'));
    }

    public function store_posting(Request $request)
    {
        //

    }

    //posting blog
    public function index_blog()
    {

        $blog = Blog::all();

        return view('user.submit.submitblog', compact('blog'));
    }

    public function store_blog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'isi' => 'required',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->isi = $request->isi;
        $blog->save();

        return redirect(route('blog'));

    }

    //posting informasi klinik
    public function index_clinic()
    {
        $clinic = Clinic_information::all();

        return view('user.submit.submitclinic', compact('clinic'));
    }

    public function store_clinic(Request $request)
    {
        $request->validate([
            'nama_klinik' => 'required',
            'deskripsi' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
        ]);
        $clinic = new Clinic_information();
        $clinic->nama_klinik = $request->nama_klinik;
        $clinic->deskripsi = $request->deskripsi;
        $clinic->no_telepon = $request->no_telepon;
        $clinic->email = $request->email;
        $clinic->lokasi = $request->lokasi;
        $clinic->save();

        return redirect(route('clinic'));

    }
}