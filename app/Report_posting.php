<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_posting extends Model
{
    //
    protected $fillable = [
        'jawaban_report'];

        public function posting(){
            return $this-> belongsToMany('App\posting', 'information_posting_reports', 'posting_id', 'report_posting_id');
        }
}
