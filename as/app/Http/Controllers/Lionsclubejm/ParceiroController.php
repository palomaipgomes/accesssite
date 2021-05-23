<?php

namespace App\Http\Controllers\Lionsclubejm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiro;


class ParceiroController extends Controller
{
    public function index(){

        $parceiros = Parceiro::where('user_id', "=", "15")->get();;
        return view('lionsclubejm.parceiros', compact('parceiros'));

    }
}
