<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 's_id', 'password', 'batch', 'email'
    ];


    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

    public function roles()
    {
        return $this->hasOne('App\Role');
    }

    public function attendances()
    {
        return $this->hasMany('App\Attendance');
    }
}
