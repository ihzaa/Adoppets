<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    //
    protected $fillable = ['keterangan', 'tanggal'];

    public function posting()
    {
        return $this->belongsTo('App\posting', 'posting_id', 'id');
    }
}