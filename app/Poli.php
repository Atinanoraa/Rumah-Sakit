<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Carbon;


class Poli extends Model
{
    protected $table = "poli";
    protected $guarded = [];

    function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('1, d F Y');
    }
}
