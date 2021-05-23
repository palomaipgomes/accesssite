<?php

namespace App\Http\Controllers\Lionsclubejm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transparencia;

class TransparenciaController extends Controller
{
    public function index(){

        $transparencias = Transparencia::where('user_id', "=", "15")->get();
        return view('lionsclubejm.transparencia', compact('transparencias'));
    }
}
