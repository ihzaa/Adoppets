<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'username', 'alamat_asal', 'domisili_sekarang', 'nomor_telpon','email', 'no_wa', 'foto_profil'
    ];

    public function posting(){
        return $this->hasMany('App\posting', 'user_id', 'id');
    }

    public function user_adoppted_history(){
        return $this->belongsToMany('App\posting', 'user_adoppted_histories', 'posting_id', 'user_id');
    }

    public function user_like_posting(){
        return $this->belongsToMany('App\posting', 'user_like_postings', 'posting_id', 'user_id');
    }
}
