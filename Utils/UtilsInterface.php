<?php

namespace Utils;


interface UtilsInterface {

    /**
     * @return StringUtils
     */
    public static function getStringUtils();

    /**
     * @return DateUtils;
     */
    public static function getDateUtils();

    /**
     * @return NumberUtils;
     */
    public static function getNumberUtils();

    /**
     * @return JSONUtils
     */
    public static function getJSONUtils();

}
