<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset_posting extends Model
{
    //
    protected $fillable = [
        'path'
    ];

    public function posting()
    {
        return $this->belongsTo('App\posting', 'posting_id', 'id');
    }
}
