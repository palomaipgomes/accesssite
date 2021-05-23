<?php

namespace App\Http\Controllers\Cbomsamaritano;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Osc;

class ServicosController extends Controller
{
    public function index(){

        $oscs = Osc::where('user_id', "=", "17")->get();
        return view('cbomsamaritano.servicos', compact('oscs'));
        
    }
}
