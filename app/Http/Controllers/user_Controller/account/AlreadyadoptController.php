<?php

namespace App\Http\Controllers\user_Controller\account;

use App\Asset_posting;
use App\Category;
use App\Http\Controllers\Controller;
use App\posting;
use App\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlreadyadoptController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $edit = DB::select('select p.*, (SELECT COUNT(*) FROM user_accept_choices as uac WHERE uac.posting_id = p.id AND uac.status = 1 ) as isAdopted  from `postings` as p where p.`user_id` = ' . Auth::guard('user')->user()->id);
        // dd($edit);
        $category = Category::pluck('nama', 'id');
        $vaksin1 = Vaccine::pluck('keterangan', 'posting_id');
        $data_image = Asset_posting::all();
        $aset_posting = Asset_posting::pluck('path', 'posting_id');
        // dd($aset_posting);

        return view('user/account/alreadyadopt', compact('edit', 'category', 'aset_posting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id)
    {
        $data['posting'] = posting::find($id);
        $user = Auth::guard('user')->user();
        if (!$data['posting'] || $user->id != $data['posting']->user_id) {
            return redirect(route('landingpage'));
        }
        $data['requestList'] = DB::select('SELECT uac.created_at, u.name FROM `user_accept_choices` as uac JOIN users as u on uac.`user_id` = u.id WHERE uac.posting_id = 1');
        $data['requestList'] = DB::table('user_accept_choices')
            ->join('users', 'user_accept_choices.user_id', '=', 'users.id')
            ->where('user_accept_choices.posting_id', '=', $id)
            ->select('user_accept_choices.created_at', 'users.name', 'user_accept_choices.pertanyaan_1 as p1', 'user_accept_choices.pertanyaan_2 as p2', 'user_accept_choices.pertanyaan_3 as p3', 'user_accept_choices.id')
            ->get();
        return view('user/account/detailUser', compact('data'));
    }

    public function info()
    {
        return view('user/account/infopengadopsi');
    }

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

    public function detail_pengadopsi()
    {
        return view('user/account/detailpengadopsi');
    }
}
