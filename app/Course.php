<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'course_id',
    ];

    public function sections()
    {
        return $this->hasMany('App\Section');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}
