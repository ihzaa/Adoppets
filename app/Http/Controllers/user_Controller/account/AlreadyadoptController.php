<?php

namespace App\Http\Controllers\user_Controller\account;

use App\Asset_posting;
use App\Category;
use App\Http\Controllers\Controller;
use App\posting;
use App\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $edit = posting::where('user_id', Auth::user()->id)->get();
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
        $data = posting::find($id);
        //$asset_posting = Asset_posting::find($id);
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
}