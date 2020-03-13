<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\District;
use App\Province;

class City extends Model
{
    protected $guarded=[];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    
    public function districts()
    {
        return $this->hasMany(District::class);
    }

}