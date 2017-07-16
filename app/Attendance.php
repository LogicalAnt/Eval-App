<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function students()
    {
        return $this->belongsTo('App\Student');
    }
}
