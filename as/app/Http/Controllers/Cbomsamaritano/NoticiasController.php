<?php

namespace App\Http\Controllers\Cbomsamaritano;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiasController extends Controller
{
    public function index(){

        $noticias = Noticia::where('user_id', "=", "17")->get();
        return view('cbomsamaritano.noticias', compact('noticias'));

    }
}
