<?php

namespace App\Http\Controllers\Cbomsamaritano;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slideshow;

class HomeController extends Controller
{
    public function index(){

        $slideshows = Slideshow::where('user_id', "=", "17")->get();
        return view('cbomsamaritano.home', compact('slideshows'));
        
    }
}
