<?php

namespace App\Http\Controllers\Cbomsamaritano;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doacao;

class DoacaoController extends Controller
{
    public function index(){
        $doacaos = Doacao::where('user_id', "=", "17")->get();
        return view('cbomsamaritano.doacao', compact('doacaos'));
    }
}
