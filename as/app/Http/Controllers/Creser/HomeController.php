<?php

namespace App\Http\Controllers\Creser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slideshow;

class HomeController extends Controller
{
    public function index(){

        $slideshows = Slideshow::where('user_id', "=", "3")->get();
        return view('creser.home', compact('slideshows'));
        
    }
}
