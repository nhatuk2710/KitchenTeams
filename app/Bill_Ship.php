<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Ship extends Model
{
    protected $table ="bill_ship";
    protected $fillable = ['product_id','bill_id','qty','price'];
}
