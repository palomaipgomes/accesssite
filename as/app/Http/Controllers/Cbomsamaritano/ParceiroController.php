<?php

namespace App\Http\Controllers\Cbomsamaritano;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiro;


class ParceiroController extends Controller
{
    public function index(){

        $parceiros = Parceiro::where('user_id', "=", "17")->get();
        return view('cbomsamaritano.parceiros', compact('parceiros'));

    }
}
