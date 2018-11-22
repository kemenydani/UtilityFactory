<?php

namespace Utils;


interface JSONUtilsInterface {

    /**
     * Determines if the last json_encode or json_decode was successful
     * @return bool
     */
    public static function lastOperationFailed();

    /**
     * @return mixed
     */
    public static function lastJSONError();

    /**
     * @param $string
     * @return bool
     */
    public static function isValidJSON($string);

}