<?php

function findSummation($n = 1) {
    if (!is_numeric($n)) {
        return false;
    }

    $sum = 0;
    for ($q = 0 ; $q <= $n ; $q++) 
        $sum += $q;
    return $sum;
}

function uppercaseFirstAndLastSorted($input = "") {
    $strs = explode(" ", $input);
    foreach ($strs as $i => $str) {
        $first = strtoupper($str[0]);
        $last = strtoupper($str[strlen($str)-1]);

        $strs[$i] = $first . substr($str, 1, strlen($str)-2) . $last;
    }

    sort($strs);
    return implode(" ", $strs);
}

function findAverageAndMedian($nums = []) {
    sort($nums);
    $avg = array_sum($nums) / sizeof($nums);
    $med = $nums[sizeof($nums)/2-1];

    return ["average" => $avg, "median" => $med];
}

function find4digits($nums = "") {
    preg_match("/\d{4}/", $nums, $matches);
    if ($matches != []) {
        return $matches[0];
    }
    return false;
}


echo findSummation(5) . "<br />\n";
echo uppercaseFirstAndLastSorted("hello my name is philip") . "<br />\n"; 
var_dump(findAverageAndMedian([1,2,3,4,5,6,7,8,9,10])) . "<br />\n";
echo find4digits("1 22 33 44");