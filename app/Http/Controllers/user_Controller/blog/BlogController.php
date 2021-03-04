<?php

namespace App\Http\Controllers\user_Controller\blog;

use App\Blog;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //list blog pada tampilan umum
    public function index()
    {
        //
        $list = Blog::all();
        $user = User::pluck('name', 'id');
        return view('user/blog/blog', compact('list', 'user'));
    }

    //detail blog (read more)
    public function readMore($id)
    {
        $data = Blog::find($id);
        $user = User::pluck('name', 'id');
        return view('user/blog/readMore', compact('data', 'user'));
    }

    //submit blog
    public function index_blog()
    {

        $blog = Blog::all();
        return view('user.submit.submitblog', compact('blog'));
    }

    //create database submit blog
    public function store_blog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'isi' => 'required',
            'picture' => 'required|image|mimes:jpeg,svg,jfif,png,jpg|max:2560',
        ]);

        $data2 = User::where('id', Auth::user()->id)->first();
        $data = new Blog();

        $data->title = $request->title;
        $data->isi = $request->isi;
        $data->picture = $request->picture;
        $data->user_id = $data2->id;
        $data->save();

        $extension = $request->file('picture')->getClientOriginalExtension();
        $location = 'images/posting';
        $nameUpload = $data->id . 'thumbnail.' . $extension;
        $request->file('picture')->move('assets/' . $location, $nameUpload);
        $filepath = 'assets/' . $location . '/' . $nameUpload;
        $data->picture = $filepath;
        $data->save();

        return redirect(route('blog'))->with('icon', 'success')->with('title', 'Berhasil')->with('text', 'Blog Berhasil Ditulis!');
    }

    //list blog di akun saya
    public function list_blog()
    {
        //
        $list = Blog::where('user_id', Auth::user()->id)->get();
        return view('user/account/postingblog', compact('list'));
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
        $data = Blog::find($id);
        return view('user/blog/EditBlog', compact('data'));
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
        $request->validate([
            'title' => 'required',
            'isi' => 'required',
            'picture' => 'image|mimes:jpeg,svg,jfif,png,jpg|max:2560',
        ]);

        $data = Blog::find($id);
        $data->title = $request->title;
        $data->isi = $request->isi;
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
        return redirect(route('posting_blog'))->with('icon', 'success')->with('text', 'Blog Berhasil di Edit! :');
    }

    public function detail($id)
    {
        $data = Blog::find($id);
        $user = User::pluck('name', 'id');
        return view('user/blog/detailBlog', compact('data', 'user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        Blog::destroy($data->id);
        File::delete($data->picture);
        return redirect(route('posting_blog'))->with('sukses_delete', 'Data Berhasil Di Delete');
    }
}