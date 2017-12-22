<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'project_id'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('percent')->withTimestamps();
    }

    public function hours()
    {
        $totalHours = 0;

        foreach ($this->users as $user) {
            $totalHours += $user->pivot->percent * 0.40;
        }

        return $totalHours;
    }

    public function hasMember($member)
    {
        return $this->users()->where('user_id', $member->id)->exists();
    }
}
