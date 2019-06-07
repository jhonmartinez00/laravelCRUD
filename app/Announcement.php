<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //
    protected $guarded = [];

    public function scopeSort($query){
        return $query->orderBy('updated_at','DESC');
    }
}
