<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Somo;

class QuemsomosController extends Controller
{
    public function index(){

        $somos = Somo::where('user_id', "=", "14")->get();
        return view('assume.quemsomos', compact('somos'));

    }
}
