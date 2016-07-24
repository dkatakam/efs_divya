<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodities extends Model
{
    //   protected $fillable=[
        'customer_id',
        'symbol',
        'price',
        'change',
        'volume',

    ];
    
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}

