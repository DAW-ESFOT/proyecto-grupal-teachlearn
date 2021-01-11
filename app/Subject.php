<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name','level'];
    public function tutorials()
    {
        return $this->hasMany('App\Tutorial');
    }
    public function users()
    {
        return $this->belongsToMany('App\User')->as('subscriptions')->withTimestamps();
    }
}
