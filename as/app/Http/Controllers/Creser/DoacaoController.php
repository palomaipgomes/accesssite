<?php

namespace App\Http\Controllers\Creser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doacao;

class DoacaoController extends Controller
{
    public function index(){
        $doacaos = Doacao::where('user_id', "=", "3")->get();
        return view('creser.doacao', compact('doacaos'));
    }
}