<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryLocation extends Model
{
    //
    protected $fillable=[
        'delivery_location_type_id',
        'delivery_location_name',
        'delivery_location_area_id',
        'delivery_location_code',
        'delivery_location_status',
        'delivery_location_parent'
    ];
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function type(){
        return $this->belongsTo(DeliveryLocationType::class);
    }
}
