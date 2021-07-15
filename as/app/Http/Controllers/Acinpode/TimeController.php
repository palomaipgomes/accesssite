<?php

namespace App\Http\Controllers\Acinpode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Time;

class TimeController extends Controller
{
    public function index(){

        $times = Time::where('user_id', "=", "4")->get();
        return view('acinpode.equipe', compact('times'));
    }
}
