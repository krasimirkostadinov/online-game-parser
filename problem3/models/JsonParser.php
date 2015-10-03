<?php

namespace problem3\models;


class JsonParser
{

    /**
     * @param string $file_path
     * @return null|string| Std object
     */
    public static function parseJson($file_path){
        $file_data = null;
        if(!empty($file_path)){
            $file_data = file_get_contents($file_path);
        }

        return $file_data;
    }


    /**
     * Apply json_decode function
     * @param $files
     * @param bool|true $return_as_array
     * @return array|Std object with data
     */
    public static function jsonDecode($files, $return_as_array = true){
        $data = json_decode($files, $return_as_array);
        return $data;
    }

}