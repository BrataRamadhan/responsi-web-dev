<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded=[];
    protected $table='product';

    public function category()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id')->withDefault();
    }
    public function merek()
    {
        return $this->belongsTo('App\Brand', 'brand_id')->withDefault();
    }

}
