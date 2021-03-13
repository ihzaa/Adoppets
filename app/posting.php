<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posting extends Model
{
    //
    // protected $fillable = ['jenis_kelamin', 'ras', 'kondisi_fisik', 'umur', 'makanan', 'warna', 'lokasi', 'informasi_lain', 'category_id', 'user_id'];
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function user_adoppted_history()
    {
        return $this->belongsToMany('App\User', 'user_accept_choices', 'user_id', 'posting_id');
    }

    public function user_like_posting()
    {
        return $this->belongsToMany('App\User', 'user_like_postings', 'user_id', 'posting_id');
    }

    public function user_accept_choice()
    {
        return $this->hasMany('App\User_accept_choice');
    }

    public function adopted_history_animal()
    {
        return $this->hasMany('App\Adoppted_history_animal', 'posting_id', 'id');
    }

    public function asset_posting()
    {
        return $this->hasMany('App\Asset_posting', 'posting_id', 'id');
    }

    public function Report_Clinic()
    {
        return $this->hasMany('App\Report_clinic', 'posting_id', 'id');
    }

    public function Report_Posting()
    {
        return $this->hasMany('App\Report_posting', 'posting_id', 'id');
    }

    public function Report_Blog()
    {
        return $this->hasMany('App\Report_blog', 'posting_id', 'id');
    }

    public function vaccine()
    {
        return $this->hasMany('App\Vaccine', 'posting_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
