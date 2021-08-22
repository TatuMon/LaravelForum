<?php

namespace App\Http\Helpers;

final class FormatStr{

    public static function keepEnters(string $string){
        $string = preg_replace('/\r/', '', $string);
        $string =  preg_replace('/\n{3,}/', '\n\n', preg_replace('/^\s+$/m', '', $string));
        $string = nl2br(htmlentities($string, ENT_QUOTES, 'UTF-8'));

        return $string;
    }

}