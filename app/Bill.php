<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bill";
    protected $fillable = ['invoice','ship_id','cpn_name','date'];

    public function Ships(){
        return $this->hasMany("\App\Ship");
    }
}
