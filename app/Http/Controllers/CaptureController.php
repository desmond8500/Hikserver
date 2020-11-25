<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptureController extends Controller
{
    public static function getImageName($name){
        $capture = explode('_', $name);

        $capture = substr($capture[2], 8, 6);

        $capture = str_split($capture, 2);

        return $capture;
        // return substr($capture[2], 8, 6);
    }
}
