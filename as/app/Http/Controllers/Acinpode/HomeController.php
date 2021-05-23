<?php

namespace App\Http\Controllers\Acinpode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slideshow;

class HomeController extends Controller
{
    public function index(){

        $slideshows = Slideshow::where('user_id', "=", "1")->get();
        return view('acinpode.home', compact('slideshows'));
        
    }
}
