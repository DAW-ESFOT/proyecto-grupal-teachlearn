<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $fillable = ['date','hour', 'price','observation','topic','image','duration'];
}
