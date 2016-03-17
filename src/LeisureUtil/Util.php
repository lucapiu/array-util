<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 17-3-16
 * Time: 14:52
 */

namespace LeisureUtil;


class Util
{
    public static function sortArray($testArray)
    {
        $coll = collator_create('fr_FR');
        $coll->sort($testArray);
        return $testArray;
    }
}