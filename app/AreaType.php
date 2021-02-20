<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaType extends Model
{
    //
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'area_type_name'
    ];
    public function area(){
        return $this->hasMany(Area::class);
    }

}
