<?php

namespace App\Services\resize_save_image;

class mkdir_file
{
    public static function mkdir($file_name){
        if(!file_exists($file_name)){
            mkdir($file_name,666, true);
            return $file_name;
        }
        return $file_name;
    }
}
