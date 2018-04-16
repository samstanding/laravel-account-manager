<?php

namespace App;

use App\Model;

class Accounts extends Model
{
    public function post() 
    {
        return $this->belongsTo(Types::class);
    }
}
