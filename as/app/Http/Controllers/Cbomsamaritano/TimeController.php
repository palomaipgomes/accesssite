<?php

namespace App\Http\Controllers\Cbomsamaritano;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Time;

class TimeController extends Controller
{
    public function index(){

        $times = Time::where('user_id', "=", "17")->get();
        return view('cbomsamaritano.equipe', compact('times'));
    }
}
