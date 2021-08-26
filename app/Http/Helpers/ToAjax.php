<?php

namespace App\Http\Helpers;

class ToAjax{
    
    public static function object(object $object){
        echo json_encode($object);
    }

}