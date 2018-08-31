<?php

namespace Challenge;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';

    public function phones()
    {
        return $this->hasMany(Phones::Class);
    }
    public function shiporders()
    {
        return $this->hasMany(ShipOrders::Class);
    }
}
