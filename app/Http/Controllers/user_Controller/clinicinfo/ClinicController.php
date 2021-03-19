<?php

namespace App\Http\Controllers\user_Controller\clinicinfo;

use App\Clinic_information;
use App\Http\Controllers\Controller;
use App\Report_clinic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //list klinik pada tampilan umum
    public function index(Request $request)
    {
        $request->search == null ?
            $list = Clinic_information::orderBy('created_at', 'DESC')->paginate(10)
            :
            $list = Clinic_information::where('lokasi', 'like', '%' . $request->search . '%')->orderBy('created_at', 'DESC')->paginate(10);

        $user = User::pluck('name', 'id');
        $latest = Clinic_information::orderBy('created_at', 'DESC')->limit(3)->get();
        // dd($latest);
        return view('user/clinic/clinic', compact('list', 'user', 'latest'));
    }

    //detail postingan klinik (read more)
    public function readMore($id)
    {
        $data = Clinic_information::find($id);
        $user = User::pluck('name', 'id');
        $latest = Clinic_information::orderBy('created_at', 'DESC')->limit(3)->get();
        if (Auth::guard('user')->check())
            $reported = Report_clinic::where('posting_id', $id)->where('user_id', Auth::guard('user')->user()->id)->count();
        return view('user/clinic/readMore', compact('data', 'user', 'latest', 'reported'));
    }

    //submit clinic
    public function index_clinic()
    {
        $clinic = Clinic_information::all();

        return view('user.submit.submitclinic', compact('clinic'));
    }

    //create submit clinic ke database
    public function store_clinic(Request $request)
    {
        $request->validate([
            'nama_klinik' => 'required',
            'deskripsi' => 'required',
            'no_telepon' => 'required',
            'picture' => 'required|image|mimes:jpeg,svg,jfif,png,jpg|max:2560',
            'email' => '',
            'lokasi' => '',
        ]);

        $data = new Clinic_information();
        $data->nama_klinik = $request->nama_klinik;
        $data->picture = $request->picture;
        $data->deskripsi = $request->deskripsi;
        $data->no_telepon = $request->no_telepon;
        $data->email = $request->email;
        $data->lokasi = $request->city;
        $data->user_id = Auth::user()->id;
        $data->save();

        $extension = $request->file('picture')->getClientOriginalExtension();
        $location = 'images/clinic';
        $nameUpload = $data->id . 'thumbnail.' . $extension;
        $request->file('picture')->move('assets/' . $location, $nameUpload);
        $filepath = 'assets/' . $location . '/' . $nameUpload;
        $data->picture = $filepath;
        $data->save();

        return redirect(route('clinic'))->with('icon_create_clinic', 'success')->with('text', 'Posting Klinik Berhasil di Buat!');;
    }

    //list clinic pada akun saya
    public function list_clinic(Request $request)
    {
        $sort = "DESC";
        if ($request->sort != null) {
            $sort = $request->sort;
        }
        $data['sort'] = $sort;
        $list = Clinic_information::where('user_id', Auth::user()->id)->orderBy('created_at', $sort)->paginate(10);
        return view('user/account/postingclinic', compact('list', 'data'));
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
        $data = Clinic_information::find($id);
        return view('user/clinic/Editclinic', compact('data'));
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
        $request->validate([
            'nama_klinik' => 'required',
            'deskripsi' => 'required',
            'no_telepon' => 'required',
            'picture' => 'image|mimes:jpeg,svg,jfif,png,jpg|max:2560',
            'email' => '',
            'lokasi' => '',
        ]);

        $data = Clinic_information::find($id);
        $data->nama_klinik = $request->nama_klinik;
        $data->deskripsi = $request->deskripsi;
        $data->no_telepon = $request->no_telepon;
        $data->email = $request->email;
        $data->lokasi = $request->city;
        if ($request->file('picture') != "") {
            File::delete($data->picture);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $location = 'images/posting';
            $nameUpload = $data->id . 'thumbnail.' . $extension;
            $request->file('picture')->move('assets/' . $location, $nameUpload);
            $filepath = 'assets/' . $location . '/' . $nameUpload;
            $data->picture = $filepath;
        }

        $data->save();
        return redirect(route('posting_clinic'))->with('icon_edit', 'success')->with('text', 'Informasi Berhasil di Edit! :');
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
        $data = Clinic_information::find($id);
        Clinic_information::destroy($data->id);
        File::delete($data->picture);
        return redirect(route('posting_clinic'))->with('icon_delete', 'success')->with('text', 'Posting Klinik Berhasil di Hapus :');
    }

    public function detail($id)
    {
        $data = Clinic_information::find($id);
        $user = User::pluck('name', 'id');
        return view('user/clinic/detailclinic', compact('data', 'user'));
    }

    public function reportClinic($id, Request $request)
    {
        Report_clinic::create([
            'posting_id' => $id,
            'jawaban_report' => $request->excuse,
            'user_id' => Auth::guard('user')->user()->id,
        ]);
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Berhasil Melakukan Report Clinic!');
    }
}
