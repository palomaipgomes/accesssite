<?php

namespace App\Http\Controllers\Lionsclubejm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doacao;

class DoacaoController extends Controller
{
    public function index(){
        $doacaos = Doacao::where('user_id', "=", "15")->get();
        return view('lionsclubejm.doacao', compact('doacaos'));
    }
}
