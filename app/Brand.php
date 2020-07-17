<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $guarded=[];
    protected $table='brand';

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
