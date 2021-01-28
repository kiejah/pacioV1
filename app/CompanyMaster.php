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
            'company_address',
            'company_phone',
            'company_country',
            'company_email',
            'companyRegNumber',
            'status',
            'contactpersonName',
            'contactpersonPhone',
            'contactpersonEmail',
    ];


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
