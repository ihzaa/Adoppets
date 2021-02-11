<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoppted_history_animal extends Model
{
    //
    protected $fillable =['start_date', 'end_date'];

    public function posting(){
        return $this->belongsTo('App\posting', 'posting_id', 'id');
    }

    public function user(){
        return $this->belongsToMany('App\User', 'user_adoppted_histories', 'user_id', 'adoppted_history_animal_id');
    }
}
