<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacioCompanyDeliveryOffice extends Model
{
    //
    protected $fillable = [
        'delivery_office_name',
        'company_id',
        'delivery_location_id',
        'office_contact_1',
        'office_contact_2'
    ];

    public function company(){
        return $this->belongsTo(CompanyMaster::class,'company_id');
    }
    public function location(){
        return $this->belongsTo(DeliveryLocation::class,'delivery_location_id');
    }
}

