<?php

namespace App\Http\Controllers\Lionsclubejm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Time;

class TimeController extends Controller
{
    public function index(){

        $times = Time::where('user_id', "=", "15")->get();
        return view('lionsclubejm.equipe', compact('times'));
    }
}
