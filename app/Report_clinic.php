<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_clinic extends Model
{
    //
    protected $fillable = [
        'jawaban_report'];

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
