<?php

namespace App\Http\Controllers\Assume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slideshow;

class HomeController extends Controller
{
    public function index(){

        $slideshows = Slideshow::where('user_id', "=", "14")->get();
        return view('assume.home', compact('slideshows'));
        
    }
}
