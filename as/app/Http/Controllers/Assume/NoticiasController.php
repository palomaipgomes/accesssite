<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiasController extends Controller
{
    public function index(){

        $noticias = Noticia::where('user_id', "=", "14")->get();
        return view('assume.noticias', compact('noticias'));

    }
}
