<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doacao;

class DoacaoController extends Controller
{
    public function index(){
        $doacaos = Doacao::where('user_id', "=", "14")->get();
        return view('assume.doacao', compact('doacaos'));
    }
}
