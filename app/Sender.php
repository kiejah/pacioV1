<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    //
    protected $guarded = [];
    protected $fillable = [
        'user_id',
        'company_id',
        'parcelTrackerCode',
        'name',
        'email',
        'nationalID',
        'phoneNumber',
        'altPhoneNumber',
    ];

    public function company(){
        return $this->belongsTo(CompanyMaster::class,'company_id');
    }

    public function parcel(){
        return $this->hasOne(Parcel::class,'parcelTrackerCode','parcelTrackerCode');
    }
}
