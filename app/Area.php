<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'area_name',
        'area_code',
        'area_capital'
    ];
    public function company(){
        return $this->hasMany(CompanyMaster::class);
    }
    public function areaType(){
        return $this->belongTo(AreaType::class,'area_type_id');
    }

}
