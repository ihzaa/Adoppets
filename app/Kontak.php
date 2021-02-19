<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    //
    protected $fillable = [
        'subject', 'message',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}