<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class CompanyMaster extends Model
{
    //

    protected $guarded = [
        'id',
        'updated_at',
        'created_at',
        'company_logo',
    ];
    protected $fillable = [
            'company_name',
            'company_code',
            'company_address',
            'company_phone',
            'country_id',
            'area_id',
            'company_email',
            'companyRegNumber',
            'status',
            'contactpersonName',
            'contactpersonPhone',
            'contactpersonEmail',
    ];
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    public function parcels(){
        return $this->hasMany(Parcel::class);
    }
    public function sender(){
        return $this->hasMany(Sender::class);
    }
    public function recipient(){
        return $this->hasMany(Receipient::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }

}
