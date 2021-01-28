<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
    protected $fillable= [
        'companyName',
        'companyRegNumber',
        'companyEmail',
        'partnerName',
        'partnerJoinNote',
        'partnerPhone',
        'partnerNationalID',
        'status',
    ];
}
