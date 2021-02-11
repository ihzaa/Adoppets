<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posting extends Model
{
    //
    protected $fillable =['informasi_vaksin', 'jenis_kelamin', 'ras', 'kondisi_fisik', 'umur', 'makanan', 'warna', 'lokasi', 'jenis_hewan', 'informasi_lain'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function user_adoppted_history(){
        return $this->belongsToMany('App\User', 'user_accept_choices', 'user_id', 'posting_id');
    }

    public function user_like_posting(){
        return $this->belongsToMany('App\User', 'user_like_postings', 'user_id', 'posting_id');
    }

    public function adopted_history_animal(){
        return $this->hasMany('App\Adoppted_history_animal', 'posting_id', 'id');
    }

    public function report_posting(){
        return $this-> belongsToMany('App\Report_posting', 'information_posting_reports', 'report_posting_id', 'posting_id');
    }

    public function report_posting(){
        return $this->hasMany('App\Report_posting', 'posting_id', 'id');
    }

}
