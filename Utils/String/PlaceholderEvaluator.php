<?php

namespace Utils\String;

class PlaceholderEvaluator
{
    public static $startToken = '{{';
    public static $endToken = '}}';

    /**
     * @var array
     */
    private $placeholders = [];

    /**
     * PlaceholderEvaluator constructor.
     * @param array $placeholders
     */
    public function __construct(array $placeholders = [])
    {
        if(count($placeholders)) $this->setPlaceholders($placeholders);
    }

    /**
     * @param $inputString
     * @param array $placeholderArray
     * @return mixed
     */
    public function evaluatePlaceholders($inputString, array $placeholderArray = []){

        if(!count($placeholderArray)) $placeholderArray = $this->placeholders;

        foreach($placeholderArray as $placeholderName => $replacementValue){
            $inputString = $this->evaluatePlaceholder($inputString, $placeholderName, $replacementValue);
        }

        return $inputString;
    }

    /**
     * @param $inputString
     * @param $placeholderName
     * @param $replacementValue
     * @return string
     */
    public function evaluatePlaceholder($inputString, $placeholderName, $replacementValue){

        $placeholderWithTokens = self::$startToken . $placeholderName . self::$endToken;

        $pair = [$placeholderWithTokens => $replacementValue];

        $outPutString = strtr($inputString, $pair);

        return $outPutString;
    }

    /**
     * @return array
     */
    public function getPlaceholders(){
        return $this->placeholders;
    }

    /**
     * @param array $placeholders
     */
    public function setPlaceholders($placeholders){
        $this->placeholders = $placeholders;
    }
}
