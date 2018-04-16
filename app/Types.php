<?php

namespace App;

use App\Model;

class Types extends Model
{
    public function accounts() 
    {
        return $this->hasMany(Accounts::class);
    }
}
