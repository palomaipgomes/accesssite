<?php

namespace App\Http\Controllers\Apasmon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doacao;

class DoacaoController extends Controller
{
    public function index(){
        $doacaos = Doacao::where('user_id', "=", "16")->get();
        return view('apasmon.doacao', compact('doacaos'));
    }
}
