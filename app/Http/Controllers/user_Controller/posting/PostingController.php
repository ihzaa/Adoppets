<?php

namespace App\Http\Controllers\user_Controller\posting;

use App\Asset_posting;
use App\Blog;
use App\Category;
use App\Clinic_information;
use App\Http\Controllers\Controller;
use App\posting;
use App\User;
use App\Vaccine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Block\Element\Document;
use Illuminate\Support\Facades\File;

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
        // $data = posting::all();
        $data = Category::all();
        return view('user.submit.submitposting', compact('data'));
    }

    public function store_posting(Request $request)
    {

        // validasi posting
        $request->validate([
            'jenis_kelamin' => 'required',
            'ras' => 'required',
            'kondisi_fisik' => 'required',
            'umur' => 'required|integer',
            'makanan' => 'required',
            'warna' => 'required',
            'lokasi' => '',
            'informasi_lain' => '',

        ]);

        $posting = posting::create([
            'jenis_kelamin' => $request->jenis_kelamin,
            'ras' => $request->ras,
            'kondisi_fisik' => $request->kondisi_fisik,
            'umur' => $request->umur,
            'makanan' => $request->makanan,
            'warna' => $request->warna,
            'lokasi' => $request->city,
            'informasi_lain' => $request->informasi_lain,
            'user_id' => Auth::user()->id,
            'category_id' => $request->submit_category,
        ]);
        foreach ($request->informasi_vaksin as $k => $v) {
            Vaccine::create([
                'keterangan' => $v,
                'tanggal' => Carbon::parse($request->tanggal[$k]),
                'posting_id' => $posting->id
            ]);
        }


        // validasi asset posting
        $this->validate($request, [
            'path' => 'required',
            'path.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasfile('path')) {
            foreach ($request->file('path') as $item) {
                $extension = $item->getClientOriginalName();
                $location = 'images/posting';
                $nameUpload = $posting->id . 'thumbnail.' . $extension;
                $item->move('assets/' . $location, $nameUpload);
                $filepath = 'assets/' . $location . '/' . $nameUpload;
                $data_image[] = $filepath;
            }
        }

        $file = new Asset_posting();
        $file->path = json_encode($data_image);
        $file->posting_id = $posting->id;
        $file->save();

        return redirect(route('landingpage'));
    }

    // halaman edit posting
    public function edit_posting()
    {
        $edit = posting::where('user_id', Auth::user()->id)->get();
        // dd($edit);
        $category = Category::pluck('nama', 'id');
        return view('user/account/mypostingan', compact('edit', 'category'));
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

        $data2 = User::where('id', Auth::user()->id)->first();
        $data = new Blog();

        $data->title = $request->title;
        $data->isi = $request->isi;
        $data->user_id = $data2->id;
        $data->save();

        return redirect(route('blog_detail'))->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Terimakasih Masukannya!');
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