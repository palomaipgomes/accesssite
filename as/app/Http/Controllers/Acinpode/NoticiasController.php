<?php

namespace App\Http\Controllers\Acinpode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiasController extends Controller
{
    public function index(){

        $noticias = Noticia::where('user_id', "=", "4")->get();
        return view('acinpode.noticias', compact('noticias'));

    }
}
