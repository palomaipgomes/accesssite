<?php

namespace App\Http\Controllers\Cbomsamaritano;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transparencia;

class TransparenciaController extends Controller
{
    public function index(){

        $transparencias = Transparencia::where('user_id', "=", "17")->get();
        return view('cbomsamaritano.transparencia', compact('transparencias'));
    }
}
