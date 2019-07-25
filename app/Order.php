<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function plate()
    {
        return $this->belongsTo('App\Plate');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable =[
        'plate_id', 'variation', 'user_id', 'time', 'observation', 'upgrade' 
    ];

    public $timestamps = true;

}
