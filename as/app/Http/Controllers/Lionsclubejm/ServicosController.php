<?php

namespace App\Http\Controllers\Lionsclubejm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Osc;

class ServicosController extends Controller
{
    public function index(){

        $oscs = Osc::where('user_id', "=", "15")->get();
        return view('lionsclubejm.servicos', compact('oscs'));
        
    }
}
