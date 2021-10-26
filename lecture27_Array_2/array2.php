<?php

/**
 * Sort by value
 */

$numbers = range(1,5);

//sort는 오름차순으로 정렬을 해준다
//sort($numbers);

//rsort는 내림차순으로 정렬을 해준다
rsort($numbers);

var_dump($numbers);

 
/**
 * Assoc sort by value
 */
$arr = [
    'r' => 'Bye',
    'c' => 'Who are you?',
    'a' => 'Hello, world'
];
//연관 배열 정렬은 a를 붙여주면 된다

arsort($arr);
var_dump($arr);

/**
 * Sort by key
 */

//ksort($arr);
krsort($arr);
var_dump($arr);

/**
 * Sort by callback
 */
/************************************************************ */
//usort vs uasort vs uksort 값을 가지고 정렬을 하는건데 두개의 차이를 정확하게 알아두어야 할거 같다
/************************************************************ */
usort($numbers,function($a,$b) {
    return $a > $b;
});

var_dump($numbers);