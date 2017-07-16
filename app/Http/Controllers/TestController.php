<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Faker;
Use App\Course;


class TestController extends Controller
{


    public function create()
    {

        $s=Student::find(5);
        $b=Course::find(5);
        //$b->students()->save($s);
         return $b->students()->get();
       return $s;
    }
}
