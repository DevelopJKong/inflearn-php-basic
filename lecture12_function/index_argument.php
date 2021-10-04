<?php
//참고사항
//함수에 매개변수에 자료형을 선언해서 제어를 할수있습니다 예를들면 아래와 같습니다


function checkType(string $arg){
    $arg = 1;
    echo $arg;
    var_dump($arg);
}

checkType();



/**
 * Define function with Parameter
 * 
 * function <name>([[datatype] <parameter name>[= default name]....])</name>
 */

 function foo($arg){
     echo $arg;
 }

 foo('Hello world');


/**
 *  Default parameter
 * 
 */

 function foo2($arg = 'Hello, world') {
     echo $arg;
 }

foo2('Who are you?');

 /**
  * Define function with Rest parameters
  */

function foo3(...$args) {
    var_dump($args);
}

foo3(1,2,3);


/**
 *  Call function with Spread
 */


function foo4($arg1,$arg2) {
    var_dump($arg1,$arg2);
}

$args = ['Hello','Jeong','Bin'];

foo4(...$args);




