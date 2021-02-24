<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryLocation extends Model
{
    //
    public $timestamps = false;

    protected $fillable=[
        'delivery_location_type_id',
        'delivery_location_name',
        'delivery_location_area_id',
        'delivery_location_code',
        'delivery_location_parent'
    ];
    public function area(){
        return $this->belongsTo(Area::class,'delivery_location_area_id');
    }
    public function type(){
        return $this->belongsTo(DeliveryLocationType::class,'delivery_location_type_id');
    }
}
