<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $guarded=[];
    protected $table='kategori';

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
