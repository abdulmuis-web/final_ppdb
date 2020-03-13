<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Village;
use App\City;

class District extends Model
{
    protected $guarded=[];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    
    public function villages()
    {
        return $this->hasMany(Village::class);
    }
}