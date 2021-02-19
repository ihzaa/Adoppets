<?php

namespace App\Http\Controllers\user_Controller\contact;

use App\Http\Controllers\Controller;
use App\Kontak;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user/contact/contact');
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

        $request->validate([
            'subject' => 'required',
            'message' => 'required',
        ]);

        // dd(Auth::user());
        $data2 = User::where('id', Auth::user()->id)->first();
        $data = Kontak::all();

        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->user_id = $data2->id;
        $data->save();                                                                                                                                                                                                          

        return redirect(route('contact'))->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Terimakasih Masukannya!');
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