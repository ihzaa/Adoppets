<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoppted_history extends Model
{
    //
    protected $fillable =['start_date', 'end_date'];

    public function posting(){
        return $this->belongsTo('App\posting', 'posting_id', 'id');
    }
}
