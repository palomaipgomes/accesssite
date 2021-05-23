<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transparencia;

class TransparenciaController extends Controller
{
    public function index(){

        $transparencias = Transparencia::where('user_id', "=", "14")->get();;
        return view('assume.transparencia', compact('transparencias'));
    }
}
