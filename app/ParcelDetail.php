<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcelDetail extends Model
{
    public $table = 'percel_details';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function company()
    {
        return $this->belongsTo(CompanyMaster::class, 'id', 'company_id');
    }

}
