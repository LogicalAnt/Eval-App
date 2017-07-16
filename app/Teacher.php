<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable= [
        'name', 'email', 'password', 'designation', 'code_name'
    ];

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

    public function roles()
    {
        return $this->hasOne('App\Role');
    }
}
