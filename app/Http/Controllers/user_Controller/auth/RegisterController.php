<?php

namespace App\Http\Controllers\user_Controller\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        // dd($data);
        return view('user/auth/register', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'alamat_asal' => 'required',
            'domisili_sekarang' => 'required',
            'nomor_telpon' => 'required',
            'email' => 'required|unique:users|email',
            'instagram' => 'nullable',
            'no_wa' => 'required',
            'foto_profil' => 'required|image|mimes:jpeg,svg,jfif,png,jpg|max:256',
            'password' => 'required|min:6',
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->alamat_asal = $request->alamat_asal;
        $data->domisili_sekarang = $request->domisili_sekarang;
        $data->nomor_telpon = $request->nomor_telpon;
        $data->email = $request->email;
        $data->instagram = $request->instagram;
        $data->no_wa = $request->no_wa;
        $data->foto_profil = $request->foto_profil;
        $data->password = Hash::make($request->password);
        $data->save();

        $extension = $request->file('foto_profil')->getClientOriginalExtension();
        $location = 'images/foto_profil';
        $nameUpload = $data->id . 'thumbnail.' . $extension;
        $request->file('foto_profil')->move('assets/' . $location, $nameUpload);
        $filepath = 'assets/' . $location . '/' . $nameUpload;
        $data->foto_profil = $filepath;
        $data->save();

        return redirect(route('get_login'))->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Registrasi berhasil!');
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