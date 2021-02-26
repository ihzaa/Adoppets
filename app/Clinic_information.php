<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_information extends Model
{
    //

    protected $fillable = [
        'nama_klinik', 'deskripsi', 'no_telepon', 'email', 'lokasi', 'picture',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function report_clinic()
    {
        return $this->belongsToMany('App\Report_clinic', 'information_clinic_reports', 'report_clinic_id', 'clinic_information_id');
    }
}