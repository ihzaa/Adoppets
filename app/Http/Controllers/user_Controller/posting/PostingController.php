<?php

namespace App\Http\Controllers\user_Controller\posting;

use App\Blog;
use App\Clinic_information;
use App\Http\Controllers\Controller;
use App\posting;
use App\User;
use App\Category;
use App\Vaccine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // dd($request);
        // dd(Carbon::parse($request->tanggal[0]));
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
            'category_id' => $request->submit_category
        ]);
        foreach ($request->informasi_vaksin as $k => $v) {
            Vaccine::create([
                'keterangan' => $v,
                'tanggal' => Carbon::parse($request->tanggal[$k]),
                'posting_id' => $posting->id
            ]);
        }
        return redirect(route('landingpage'));
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
