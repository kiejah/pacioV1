<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    //
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'user_id',
        'company_id',
        'parcelTrackerCode',
        'parcelNote',
        'parcelName',
        'parcelWeight',
        'fee',
        'bookedDate',
        'parcelFrom',
        'parcelTo',
    ];


    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function sender(){
        return $this->belongsTo(Sender::class,'parcelTrackerCode','parcelTrackerCode');
    }
    public function receipient(){
        return $this->belongsTo(Receipient::class,'parcelTrackerCode','parcelTrackerCode');
    }

}
