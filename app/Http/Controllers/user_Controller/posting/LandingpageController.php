<?php

namespace App\Http\Controllers\user_Controller\posting;

use App\Asset_posting;
use App\Category;
use App\Http\Controllers\Controller;
use App\posting;
use App\User;
use App\User_accept_chioce;
use App\User_accept_choice;
use App\User_like_posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        // dd($request->category);
        $data['category'] = [
            "id" => "",
            "name" => "",
        ];
        $data['location'] = '';
        if ($request->sort != null) {
            $data['sort'] = $request->sort;
        } else {
            $data['sort'] = 'desc';
        }

        if ($request->category == null && $request->location == null) {
            // $data['posts'] = posting::paginate(20);
            $data['posts'] = DB::table('postings')
                ->select(
                    'postings.*',
                    DB::raw('(SELECT asset_postings.path FROM asset_postings WHERE asset_postings.posting_id = postings.id LIMIT 1) as foto'),
                    'categories.nama as category',
                    'users.name as username'
                )
                ->join('categories', 'categories.id', '=', 'postings.category_id')
                ->join('users', 'users.id', '=', 'postings.user_id')
                ->orderBy('created_at', $data['sort'])
                ->paginate(20);
            // $data['posts'] = DB::select('SELECT p.*,c.nama as category, (SELECT ap.path FROM asset_postings AS ap WHERE ap.posting_id = p.id LIMIT 1) as foto FROM `postings` AS p JOIN categories as c ON c.id = p.category_id');
        } else if ($request->category != null && $request->location == null) {
            $category = Category::where('nama', "like", $request->category)->first();
            $data['category'] = [
                "id" => $category->id,
                "name" => $category->nama,
            ];
            $data['posts'] = DB::table('postings')
                ->select(
                    'postings.*',
                    DB::raw('(SELECT asset_postings.path FROM asset_postings WHERE asset_postings.posting_id = postings.id LIMIT 1) as foto'),
                    'categories.nama as category',
                    'users.name as username'
                )
                ->join('categories', 'categories.id', '=', 'postings.category_id')
                ->join('users', 'users.id', '=', 'postings.user_id')
                ->where('postings.category_id', $category->id)
                ->orderBy('created_at', $data['sort'])
                ->paginate(20);
        } else if ($request->category == null && $request->location != null) {
            $data['location'] = $request->location;
            // $data['posts'] = posting::where('lokasi', 'like', $request->location)->paginate(20);
            $data['posts'] = DB::table('postings')
                ->select(
                    'postings.*',
                    DB::raw('(SELECT asset_postings.path FROM asset_postings WHERE asset_postings.posting_id = postings.id LIMIT 1) as foto'),
                    'categories.nama as category',
                    'users.name as username'
                )
                ->join('categories', 'categories.id', '=', 'postings.category_id')
                ->join('users', 'users.id', '=', 'postings.user_id')
                ->where('postings.lokasi', 'like', '%' . $request->location . '%')
                ->orderBy('created_at', $data['sort'])
                ->paginate(20);
        } else {
            $category = Category::where('nama', "like", $request->category)->first();
            $data['category'] = [
                "id" => $category->id,
                "name" => $category->nama,
            ];
            $data['location'] = $request->location;
            // $data['posts'] = posting::where('category_id', $category->id)->where('lokasi', 'like', $request->location)->paginate(20);
            $data['posts'] = DB::table('postings')
                ->select(
                    'postings.*',
                    DB::raw('(SELECT asset_postings.path FROM asset_postings WHERE asset_postings.posting_id = postings.id LIMIT 1) as foto'),
                    'categories.nama as category',
                    'users.name as username'
                )
                ->join('categories', 'categories.id', '=', 'postings.category_id')
                ->join('users', 'users.id', '=', 'postings.user_id')
                ->where('postings.lokasi', 'like', '%' . $request->location . '%')
                ->where('postings.category_id', $category->id)
                ->orderBy('created_at', $data['sort'])
                ->paginate(20);
        }
        // $data['posts'] = $this->arrayPaginator($data['posts']);
        // dd($data);
        $data['category_list'] = Category::pluck('nama', 'id');
        return view('user/posting/landingpage', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // DETAIL postingan pada Landingpage
    public function detailPosting($id)
    {
        $data = posting::find($id);
        $edit = DB::select('SELECT p.*, (SELECT v.keterangan FROM vaccines as v where v.posting_id = p.id LIMIT 1) as keterangan, (SELECT v.tanggal FROM vaccines as v where v.posting_id = p.id LIMIT 1) as tanggal FROM postings as p WHERE p.id = ' . $id);
        $like['counter'] = User_like_posting::where('posting_id', $id)->count();
        $asset_posting = Asset_posting::where('posting_id', $id)->get();
        // dd($asset_posting);
        $user = User::pluck('name', 'id');
        $user_foto = User::pluck('foto_profil', 'id');
        $deskripsi = array();
        $deskripsi['alamat_asal'] = User::pluck('alamat_asal', 'id');
        $deskripsi['email'] = User::pluck('email', 'id');
        $deskripsi['nomor_telpon'] = User::pluck('nomor_telpon', 'id');
        $deskripsi['no_wa'] = User::pluck('no_wa', 'id');
        $deskripsi['domisili_sekarang'] = User::pluck('domisili_sekarang', 'id');
        $deskripsi['instagram'] = User::pluck('instagram', 'id');
        $isAdopt = '';
        if (Auth::guard('user')->check()) {
            $like['isLike'] = User_like_posting::where('posting_id', $id)->where('user_id', Auth::guard('user')->user()->id)->count();
            $isAdopt = User_accept_choice::where('posting_id', $id)->where('user_id', Auth::guard('user')->user()->id)->first();
        }
        //$category = Category::pluck('nama', 'id');

        return view('user/posting/detail', compact('data', 'asset_posting', 'user', 'user_foto', 'deskripsi', 'edit', 'isAdopt', 'like'));
    }
}
