<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_accept_choice extends Model
{
    //
    protected $fillable = [
        'pertanyaan_1', 'pertanyaan_2', 'pertanyaan_3', 'user_id', 'posting_id'
    ];
}
