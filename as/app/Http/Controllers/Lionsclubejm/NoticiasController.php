<?php

namespace App\Http\Controllers\Lionsclubejm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiasController extends Controller
{
    public function index(){

        $noticias = Noticia::where('user_id', "=", "15")->get();
        return view('lionsclubejm.noticias', compact('noticias'));

    }
}
