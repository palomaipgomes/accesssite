<?php

namespace App\Http\Controllers\Apasmon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transparencia;

class TransparenciaController extends Controller
{
    public function index(){

        $transparencias = Transparencia::where('user_id', "=", "16")->get();
        return view('apasmon.transparencia', compact('transparencias'));
    }
}
