<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutualfund extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'symbol',
        'name',
        'mutualfunds',
        'acquired_price',
        'acquired_date',

    ];
    
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
