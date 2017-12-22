<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function activities()
    {
        return $this->belongsToMany('App\Activity');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

}
