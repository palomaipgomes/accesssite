<?php

namespace App\Http\Controllers\Creser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Time;

class TimeController extends Controller
{
    public function index(){

        $times = Time::where('user_id', "=", "3")->get();
        return view('creser.equipe', compact('times'));
    }
}
