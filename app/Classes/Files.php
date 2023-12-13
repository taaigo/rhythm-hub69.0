<?php
namespace App\Classes;

class Files {
    static function getFilesByExtension($path, $extensions) {
        $output = '';
        $files = glob($path."/*.{".$extensions."}", GLOB_BRACE);
    
        for ($i = 0; $i < count($files); $i++)
        {
            $output .= $files[$i];
        }
        return $output;
    }

    static function getFileIfExists($path, $value, $defaultValue) {
        if (file_exists("/public/".$path."/".$value)) {
            return $value;
        } else {
            return $defaultValue;
        }
    }
}