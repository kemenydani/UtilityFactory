<?php

namespace Utils;

use Utils\String\PlaceholderEvaluator;


class StringUtils implements StringUtilsInterface {

    /**
     * @return PlaceholderEvaluator
     */
    public static function placeholderEvaluator(){
        return new PlaceholderEvaluator();
    }

    //... other utility methods ...

}
