<?php

namespace App\Http\Controllers\user_Controller\account;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

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

        $request->validate([
            'name' => '',
            'username' => '',
            'alamat_asal' => '',
            'domisili_sekarang' => '',
            'nomor_telpon' => '',
            'email' => 'email',
            'instagram' => 'nullable',
            'no_wa' => '',
            'foto_profil' => 'image|mimes:jpeg,svg,jfif,png,jpg|max:256',
        ]);

        // $this->validate($request, [
        //     'password' => 'confirmed',
        // ]);
        $data = User::where('id', Auth::user()->id)->first();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->alamat_asal = $request->alamat_asal;
        $data->domisili_sekarang = $request->domisili_sekarang;
        $data->nomor_telpon = $request->nomor_telpon;
        $data->email = $request->email;
        $data->instagram = $request->instagram;
        $data->no_wa = $request->no_wa;
        // $data->foto_profil = $request->foto_profil;

        // if (!empty($request->password)) {
        //     $data->password = Hash::make($request->password);
        // }

        if ($request->file('foto_profil') != "") {
            File::delete($data->foto_profil);
            $extension = $request->file('foto_profil')->getClientOriginalExtension();
            $location = 'images/foto_profil';
            $nameUpload = $data->id . 'thumbnail.' . $extension;
            $request->file('foto_profil')->move('assets/' . $location, $nameUpload);
            $filepath = 'assets/' . $location . '/' . $nameUpload;
            $data->foto_profil = $filepath;
        }

        $data->save();
        return redirect(route('account'))->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Update Profil berhasil!');
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

    public function changePassword(Request $request)
    {
        // dd($request);
        $request->validate([
            'old' => 'required|min:6',
            'new' => 'required|min:6'
        ]);

        $user = Auth::guard('user')->user();

        if (Hash::check($request->old, $user->password)) {
            dd($User);
            User::find($user->id)->update([
                'password' => Hash::make($request->new)
            ]);
            return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Berhasil Merubah Password!');
        } else {
            return back()->with('icon', 'error')->with('title', 'Maaf')->with('text', 'Password Lama Anda Salah!');
        }
    }
}