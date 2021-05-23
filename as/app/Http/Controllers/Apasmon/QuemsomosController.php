<?php

namespace App\Http\Controllers\Apasmon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Somo;

class QuemsomosController extends Controller
{
    public function index(){

        $somos = Somo::where('user_id', "=", "16")->get();
        return view('apasmon.quemsomos', compact('somos'));

    }
}
