<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_blog extends Model
{
    //
    protected $fillable = [
        'jawaban_report'
    ];

    public function blog()
    {
        return $this->belongsToMany('App\Blog', 'information_blog_reports', 'blog_id', 'report_blog_id');
    }
}