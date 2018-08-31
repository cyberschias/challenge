<?php

namespace Challenge;

use Illuminate\Database\Eloquent\Model;

class ShipOrders extends Model
{
    protected $table = 'shiporders';

    public function person()
    {
        return $this->belongsTo(Person::Class);
    }
    public function items()
    {
        return $this->hasMany(Items::Class);
    }
}
