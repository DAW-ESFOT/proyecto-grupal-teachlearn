<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $fillable = ['date','hour', 'pay_values','image','duration'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
