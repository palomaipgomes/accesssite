<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;

class ArtigoController extends Controller
{
    public function index(){

        $cod = $_REQUEST['id'];
        $noticias = Noticia::where("user_id", "=", "6")->where("id", "=", $cod)->get();
        return view('apasmon.artigo', compact('noticias'));

    }
}