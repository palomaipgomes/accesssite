<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Time;

class TimeController extends Controller
{
    public function index(){

        $times = Time::where('user_id', "=", "14")->get();;
        return view('assume.equipe', compact('times'));
    }
}
