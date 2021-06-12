<?php

namespace App\Http\Controllers\Creser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Somo;

class QuemsomosController extends Controller
{
    public function index(){

        $somos = Somo::where('user_id', "=", "3")->get();
        return view('creser.quemsomos', compact('somos'));

    }
}
