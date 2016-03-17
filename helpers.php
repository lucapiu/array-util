<?php
/**
 * Created by PhpStorm.
 * User: lucaSartori
 * Date: 17-3-16
 * Time: 15:05
 */

if (! function_exists('sortArray')) {
    function sortArray($testArray)
    {
        $coll = collator_create('fr_FR');
        $coll->sort($testArray);
        return $testArray;
    }
}
if (! function_exists('getListAttribute')) {
    /**
     * @param $data array
     * @param $attribute string
     * @return array
     */
    function getListAttribute($data, $attribute)
    {
        return array_map(
            function($element) use ($attribute) { return $element->attribute($attribute); },
            $data
        );
    }
}
