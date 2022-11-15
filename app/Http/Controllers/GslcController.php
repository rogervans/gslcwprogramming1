<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gslc;
class GslcController extends Controller
{
    public function index(){
        return view('gslc', [

            "gslc" => Gslc::all()
        ]);
    }

    public function show($slug){

        return view('gsl', [
            "name" => "Solo GSL",
            "gsl" => Gslc::find($slug)
        ]);
    }
}
