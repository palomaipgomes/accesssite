<?php

namespace App\Http\Controllers\Crescer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiro;


class ParceiroController extends Controller
{
    public function index(){

        $parceiros = Parceiro::where('user_id', "=", "3")->get();
        return view('creser.parceiros', compact('parceiros'));

    }
}
