<?php

namespace App\Http\Controllers\Acinpode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transparencia;

class TransparenciaController extends Controller
{
    public function index(){

        $transparencias = Transparencia::where('user_id', "=", "4")->get();
        return view('acinpode.transparencia', compact('transparencias'));
    }
}
