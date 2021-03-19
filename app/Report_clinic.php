<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_clinic extends Model
{
    protected $guarded = [];
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function Posting()
    {
        return $this->belongsTo('App\posting', 'posting_id', 'id');
    }
}
