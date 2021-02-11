<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_clinic extends Model
{
    //
    protected $fillable = [
        'jawaban_report'];

        public function clinic_information(){
            return $this->belongsToMany('App\Clinic_information', 'information_clinic_reports',  'clinic_information_id', 'report_clinic_id');
        }
}
