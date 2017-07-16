<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function show()
    {
        //dd('hit');
        return view('others.attendance');
    }
}
