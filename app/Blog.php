<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable =['title', 'isi'];
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function user_like_blog(){
        return $this->belongsToMany('App\User', 'user_like_blogs', 'user_id', 'blog_id');
    }
}
