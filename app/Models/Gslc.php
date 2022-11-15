<?php

namespace App\Models;

class gslc
{

    private static $gslc = [
        [   "name" => "2440028754 - Roger Van Soegihjanto",
            "slug" => "2440028754-roger-van-soegihjanto",
            "body" => "I'm the real one, my uniqueness is I have this email",
            "message" => "roger.soegihjanto@binus.ac.id"
        ],
        [
            "name" => "Soegihjanto earth 866",
            "slug" => "soegihjanto-earth-866",
            "body" => "I'm van but I like to hide my profile with soegihjanto's profile he looks like this",
            "message" => "I'm sorry I think in this array can't show an image so yeah sorry"


        ]
    ];

    public static function all(){
        return collect(self::$gslc);
    }


    public static function find($slug){
        $gslc = static::all();
        // $gsl = [];
        // foreach($gslc as $g){
        //     if($g["slug"] === $slug){
        //         $gsl = $g;
        //     }
        // }
        return $gslc->firstWhere('slug', $slug);
    }
}
