<?php

namespace App\Http\Controllers\Apasmon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Osc;

class ServicosController extends Controller
{
    public function index(){

        $oscs = Osc::where('user_id', "=", "16")->get();
        return view('apasmon.servicos', compact('oscs'));
        
    }
}
