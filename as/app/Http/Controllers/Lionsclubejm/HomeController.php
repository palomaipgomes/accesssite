<?php

namespace App\Http\Controllers\Lionsclubejm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slideshow;

class HomeController extends Controller
{
    public function index(){

        $slideshows = Slideshow::where('user_id', "=", "15")->get();
        return view('lionsclubejm.home', compact('slideshows'));
        
    }
}
