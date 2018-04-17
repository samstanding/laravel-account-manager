<?php

namespace App;

class Types extends Model
{
    public function accounts() 
    {
        return $this->hasMany(Accounts::class);
    }
}
