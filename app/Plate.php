<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    public function variations()
    {
    return $this->belongsToMany('\App\Variation');

    }
    public function order()
    {
        return $this->HasOne('App\Order');
    }
}

