<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'username', 'alamat_asal', 'domisili_sekarang', 'nomor_telpon', 'email', 'instagram', 'no_wa', 'foto_profil',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $attributes = [
        'instagram' => 'a',
    ];

    public function posting()
    {
        return $this->hasMany('App\posting', 'user_id', 'id');
    }

    public function user_accept_choice()
    {
        return $this->belongsToMany('App\posting', 'user_accept_choices', 'posting_id', 'user_id');
    }

    public function user_like_posting()
    {
        return $this->belongsToMany('App\posting', 'user_like_postings', 'posting_id', 'user_id');
    }

    public function adoppted_history_animal()
    {
        return $this->belongsToMany('App\Adoppted_history_animal', 'user_adoppted_histories', 'adoppted_history_animal_id', 'user_id');
    }

    public function blog()
    {
        return $this->hasMany('App\Blog', 'user_id', 'id');
    }

    public function user_like_blog()
    {
        return $this->belongsToMany('App\Blog', 'user_like_blogs', 'blog_id', 'user_id');
    }

    public function clinic_information()
    {
        return $this->hasMany('App\Clinic_information', 'user_id', 'id');
    }

    public function Report_Clinic()
    {
        return $this->hasMany('App\Report_clinic', 'user_id', 'id');
    }

    public function Report_Posting()
    {
        return $this->hasMany('App\Report_posting', 'user_id', 'id');
    }

    public function Report_Blog()
    {
        return $this->hasMany('App\Report_blog', 'user_id', 'id');
    }

    public function kontak()
    {
        return $this->hasMany('App\Kontak', 'user_id', 'id');
    }
}