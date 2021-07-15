<?php

namespace App\Http\Controllers\Acinpode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiro;


class ParceiroController extends Controller
{
    public function index(){

        $parceiros = Parceiro::where('user_id', "=", "4")->get();
        return view('acinpode.parceiros', compact('parceiros'));

    }
}
