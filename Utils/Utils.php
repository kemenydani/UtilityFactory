<?php

namespace Utils;


abstract class Utils implements UtilsInterface
{

    /**
     * @return StringUtils
     */
    public static function getStringUtils(){
        return new StringUtils();
    }

    /**
     * @return DateUtils
     */
    public static function getDateUtils(){
        return new DateUtils();
    }

    /**
     * @return NumberUtils
     */
    public static function getNumberUtils(){
        return new NumberUtils();
    }

    /**
     * @return JSONUtils
     */
    public static function getJSONUtils(){
        return new JSONUtils();
    }

}
