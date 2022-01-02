<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('home.home', compact('sliders'));
    }
}
