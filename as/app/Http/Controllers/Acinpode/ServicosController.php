<?php

namespace App\Http\Controllers\Acinpode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Osc;

class ServicosController extends Controller
{
    public function index(){

        $oscs = Osc::where('user_id', "=", "1")->get();
        return view('acinpode.servicos', compact('oscs'));
        
    }
}
