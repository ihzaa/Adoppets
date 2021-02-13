<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_blog extends Model
{
    //
    protected $fillable = [
        'jawaban_report',
    ];

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function Posting()
    {
        return $this->belongsTo('App\posting', 'posting_id', 'id');
    }
}
