<?php

namespace Utils;

class JSONUtils implements JSONUtilsInterface
{
    /**
     * Determines if the last json_encode or json_decode was successful
     * @return bool
     */
    public static function lastOperationFailed(){
        return self::lastJSONError() !== null;
    }

    /**
     * @return int|null
     */
    public static function lastJSONError(){
        return json_last_error() === JSON_ERROR_NONE ? null : json_last_error();
    }

    /**
     * @param $string
     * @return bool
     */
    public static function isValidJSON($string){
        return !!json_decode($string);
    }

}
