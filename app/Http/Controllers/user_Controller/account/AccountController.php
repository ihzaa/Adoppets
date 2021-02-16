<?php

namespace App\Http\Controllers\user_Controller\account;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('user/account/account');
        $user = User::where('id', Auth::user()->id)->first();

        return view('user.account.account', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'password' => 'confirmed',
        // ]);

        // $user = User::where('id', Auth::user()->id)->first();
        // $user->name = $request->name;
        // $user->username = $request->username;
        // $user->email = $request->email;
        // $user->alamat_asal = $request->alamat_asal;
        // $user->domisili_sekarang = $request->domisili_sekarang;
        // $user->nomor_telpon = $request->nomor_telpon;
        // $user->no_wa = $request->no_wa;

        // // // if (!empty($request->password)) {
        // // //     $user->password = Hash::make($request->password);
        // // // }

        // $user->update();

        // return redirect('user.account.account');
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
