<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="product";
    protected $fillable =['product_name','product_desc','price','qty','status','ship_id'];

    public function Ships(){
        $this->belongsTo("\App\Ship");
    }
}
