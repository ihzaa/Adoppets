<?php

namespace App\Http\Controllers\user_Controller\posting;

use App\Asset_posting;
use App\Category;
use App\Http\Controllers\Controller;
use App\posting;
use App\User;
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

    //tampilan posting hewan peliharaan
    public function index_posting()
    {
        // $data = posting::all();
        $data = Category::all();
        return view('user.submit.submitposting', compact('data'));
    }

    // menyimpan hasil posting hewan peliharaan
    public function store_posting(Request $request)
    {

        // validasi posting
        $request->validate([
            'title' => 'required',
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
            'title' => $request->title,
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
                'posting_id' => $posting->id,
            ]);
        }

        // validasi asset posting
        $this->validate($request, [
            'path' => 'required',
            'path.*' => 'mimes:jpeg,png,jpg,mp4,webm,mpg|max:6000',
        ]);

        if ($request->hasFile('path')) {
            foreach ($request->path as $item) {
                Asset_posting::create([
                    $extension = $item->getClientOriginalName(),
                    $location = 'images/posting',
                    $nameUpload = $posting->id . 'thumbnail.' . $extension,
                    $item->move('assets/' . $location, $nameUpload),
                    $filepath = 'assets/' . $location . '/' . $nameUpload,
                    $data_image = $filepath,
                    'path' => $data_image,
                    'posting_id' => $posting->id,
                ]);
            }
        }

        return redirect(route('landingpage'))->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Berhasil Menulis Postingan Hewan!');
    }

    // halaman edit posting
    public function edit_posting()
    {
        $edit = posting::where('user_id', Auth::user()->id)->get();
        $category = Category::pluck('nama', 'id');
        $vaksin1 = Vaccine::pluck('keterangan', 'posting_id');
        $aset_posting = Asset_posting::pluck('path', 'posting_id');
        // dd($aset_posting);

        return view('user/account/mypostingan', compact('edit', 'category', 'aset_posting'));
    }

    public function detail()
    {
        // $data = posting::find($id);
        // $user = User::pluck('name', 'id');
        return view('user/posting/detailPosting');
    }

    //list posting pada my akun
    public function list_posting()
    {
        return view('user/account/mypostingan');
    }

    // detail posting hewan pada my account

    public function detail_hewan($id)
    {
        $data = posting::find($id);
        return view('user/posting/detailPostingAccount', compact('data'));
    }
}