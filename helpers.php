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

/**
 * Returns a string that contains the provided date and range, for asserting against the last part of the page url.
 * @param $expectedDate
 * @param $expectedRange
 * @return string
 */
if (! function_exists('getRequiredUrlForDateRange')) {

    function getRequiredUrlForDateRange($expectedDate, $expectedRange)
    {
        $expectedDateRange = substr($expectedDate, 2) . $expectedRange;
        return $expectedDateRange;
    }
}