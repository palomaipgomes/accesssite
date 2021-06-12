<?php

namespace App\Http\Controllers\Creser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiasController extends Controller
{
    public function index(){

        $noticias = Noticia::where('user_id', "=", "3")->get();
        return view('creser.noticias', compact('noticias'));

    }
}
