<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class CompanyMaster extends Model
{
    //

    protected $guarded = [];


    public function parcels(){
        return $this->hasMany('App\Parcel');
    }
    public function sender(){
        return $this->hasMany(Sender::class);
    }
    public function recipient(){
        return $this->hasMany(Receipient::class);
    }

}
