<?php

require __DIR__ . '/vendor/autoload.php';

use Utils\DateUtils;
use Utils\JSONUtils;
use Utils\NumberUtils;
use Utils\StringUtils;
use Utils\Utils;

/**
 * 1. every util can be reached from the abstract Utils class
 * 2. you can create standalone instance of utils
 * 3. every until acts as a function library and factory in the same time
 * 4. every util can also work as a standalone factory serving more complex utils under their context
 *      - an example for that is the StringUtils which can serve an instance of StringUtils::PlaceholderEvaluator
 */


// 1.
$stringUtils = Utils::getStringUtils();
$jsonUtils = Utils::getJSONUtils();

// 2.
$numberUtils = new NumberUtils();
$dateUtils = new DateUtils();

// 3. serving just the get_days_left function (acts as library)
$date = date('Y-m-d');
$days_left = DateUtils::get_days_left($date);
$last_json_error = JSONUtils::lastJSONError();
$bool = JSONUtils::isValidJSON("myJSONString");

// 4. StringUtils serves a "sub"-util which is a more complex util
// With this, more complex utils encapsulate their logic in a class (PlaceholderEvaluator) in this case
$placeholderEvaluator = StringUtils::placeholderEvaluator();

$placeholderEvaluator->setPlaceholders([
    'url' => '<a href="">url</a>',
    'foo_ph' => 'foo_val',
    'bar_ph' => 'bar_val',
]);

$myText = "This is an example text with {{url}}";

$myText = $placeholderEvaluator->evaluatePlaceholders($myText);

echo $myText;
