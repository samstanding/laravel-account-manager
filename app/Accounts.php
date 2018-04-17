<?php

namespace App;

class Accounts extends Model
{
    public function types() 
    {
        return $this->belongsTo(Types::class);
    }
}
