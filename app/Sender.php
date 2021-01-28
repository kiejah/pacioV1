<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    //
    protected $guarded = [];

    public function company(){
        return $this->belongsTo(CompanyMaster::class,'company_id');
    }

    public function parcel(){
        return $this->hasOne(Parcel::class,'parcelTrackerCode','parcelTrackerCode');
    }
}
