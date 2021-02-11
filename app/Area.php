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

}
