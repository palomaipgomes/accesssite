<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiro;


class ParceiroController extends Controller
{
    public function index(){

        $parceiros = Parceiro::where('user_id', "=", "14")->get();;
        return view('assume.parceiros', compact('parceiros'));

    }
}
