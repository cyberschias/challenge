<?php

namespace Challenge;

use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    protected $table = 'phones';
    public function phones()
    {
        return $this->belongsTo(Person::Class);
    }
}
