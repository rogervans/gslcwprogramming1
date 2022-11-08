<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/gslc', function () {
    $gslc = [

        [
            "name" => "2440028754 - Roger Van Soegihjanto",
            "body" => "I'm the real one, my uniqueness is I have this email",
            "message" => "roger.soegihjanto@binus.ac.id"
        ],
        [
            "name" => "Soegihjanto earth 866",
            "body" => "I'm van but I like to hide my profile with soegihjanto's profile he looks like this",
            "message" => "I'm sorry I think in this array can't show an image so yeah sorry"


        ]
        ];
    return view('gslc', [

        "gslc" => $gslc
    ]);
});
