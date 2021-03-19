<?php

namespace App\Http\Controllers\user_Controller\posting;

use App\Http\Controllers\Controller;
use App\Mail\AdoptOwner;
use App\Mail\AdoptRequest;
use App\Mail\AdoptRequestAccept;
use App\posting;
use App\User;
use App\User_accept_choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class adoptController extends Controller
{
    public function adopt($id, Request $request)
    {
        $user = Auth::guard('user')->user();

        User_accept_choice::create([
            'user_id' => $user->id,
            'posting_id' => $id,
            'pertanyaan_1' => $request->satu,
            'pertanyaan_2' => $request->dua,
            'pertanyaan_3' => $request->tiga
        ]);

        $posting = posting::find($request->id);
        $sendMail = array();
        $sendMail['owner'] = User::find($posting->user_id);
        $sendMail['requestList'] = DB::select('SELECT u.name, u.username, uac.created_at FROM user_accept_choices as uac JOIN users as u ON uac.user_id = u.id');
        $sendMail['posting'] = $posting;
        Mail::to($sendMail['owner']->email)->send(new AdoptOwner($sendMail));
        Session::flash('icon', 'success');
        Session::flash('title', 'Berhasil');
        Session::flash('text', 'Permintaan Adopsi Berhasil.');

        // return response()->json([
        //     'message' => 'Success Adopt'
        // ]);
        return back()->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Adopsi Berhasil!');
    }

    public function unadopt(Request $request)
    {
        User_accept_choice::find($request->id)->delete();
        Session::flash('icon', 'success');
        Session::flash('title', 'Berhasil');
        Session::flash('text', 'Berhasil Batal Adopsi.');

        return response()->json([
            'message' => 'Success Unadopt'
        ]);
    }

    public function userAcceptAdoption(Request $request)
    {
        $list =  User_accept_choice::find($request->id);
        if (isset($list)) {
            $list->status = 1;
            $list->save();
            $data['receiver'] = User::find($list->user_id);
            $data['sender'] = posting::find($list->posting_id);
            $data['sender_fix'] = User::find($data['sender']->user_id);
            $data['posting'] = DB::select('SELECT p.*, c.nama as categry, (SELECT ap.path FROM asset_postings as ap WHERE ap.posting_id = p.id LIMIT 1) as path FROM postings as p JOIN categories as c on p.category_id = c.id WHERE p.id = ' . $list->posting_id)[0];

            // return response()->json($data);

            // dd($data);
            Mail::to($data['receiver']->email)->send(new AdoptRequestAccept($data));
            Session::flash('icon', 'success');
            Session::flash('title', 'Berhasil');
            Session::flash('text', 'Berhasil diberikan izin adopsi, yang bersangkutan akan menerima email notifikasi!');
            return response()->json([
                'status' => 'ok',
                'next' => route('alreadyadopt')
            ]);
        }
    }
}
