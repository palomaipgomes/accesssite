<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Osc;

class ServicosController extends Controller
{
    public function index(){

        $oscs = Osc::where('user_id', "=", "14")->get();
        return view('assume.servicos', compact('oscs'));
        
    }
}
