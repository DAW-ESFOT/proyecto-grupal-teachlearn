<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name','level','topic'];
    public function tutorials()
    {
        return $this->hasMany('App\Tutorial');
    }
}
