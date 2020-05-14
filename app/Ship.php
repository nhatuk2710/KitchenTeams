<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $table ="ship";
    protected $fillable = ['ship_name'];

    public function Products(){
        return $this->hasMany("\App\Product");
    }
}
