<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tutorial extends Model
{

    protected $fillable = ['date','hour','observation','topic', 'price','image','duration','subject_id'];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($tutorial) {
            $tutorial->user_id = Auth::id();
        });
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

}
