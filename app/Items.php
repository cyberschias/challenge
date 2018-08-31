<?php

namespace Challenge;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';

    public function items()
    {
        return $this->belongsTo(ShipOrders::Class);
    }
}
