<?php

namespace App\Http\Controllers\Creser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Osc;

class ServicosController extends Controller
{
    public function index(){

        $oscs = Osc::where('user_id', "=", "3")->get();
        return view('creser.servicos', compact('oscs'));
        
    }
}
