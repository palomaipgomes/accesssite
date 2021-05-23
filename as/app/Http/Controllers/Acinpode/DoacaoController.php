<?php

namespace App\Http\Controllers\Acinpode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doacao;

class DoacaoController extends Controller
{
    public function index(){
        $doacaos = Doacao::where('user_id', "=", "1")->get();
        return view('acinpode.doacao', compact('doacaos'));
    }
}
