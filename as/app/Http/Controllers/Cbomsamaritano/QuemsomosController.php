<?php

namespace App\Http\Controllers\Cbomsamaritano;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Somo;

class QuemsomosController extends Controller
{
    public function index(){

        $somos = Somo::where('user_id', "=", "17")->get();
        return view('cbomsamaritano.quemsomos', compact('somos'));

    }
}
