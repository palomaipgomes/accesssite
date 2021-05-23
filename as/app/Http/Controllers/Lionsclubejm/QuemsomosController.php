<?php

namespace App\Http\Controllers\Lionsclubejm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Somo;

class QuemsomosController extends Controller
{
    public function index(){

        $somos = Somo::where('user_id', "=", "15")->get();
        return view('lionsclubejm.quemsomos', compact('somos'));

    }
}
