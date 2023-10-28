<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{


    public function index()
    {
        return view('layouts.dashboard', [
            "title" => "Dashboard",
            "slider" => Slider::all(),
        ]);
    }


    public function show($slug)
    {
        return view('layouts.section.news', [
            "title" => 'title juga',
            "slider" => Slider::find($slug),
        ]);
    }
}
