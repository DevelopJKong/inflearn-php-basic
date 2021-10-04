<?php

/**
 * Arrow Functions
 * https://wiki.php.net/rfc/arrow_function_v2
 * 
 * PHP 7.4
 */

 $message = 'Hello,world';

 function foo($callback){
     echo $callback();
 }

 foo(function() use($message){
    return $message;
 });

 foo(fn()=> $message);

 $fn = function($var) use($message) {
     return $message;
 };

 $fn = fn($var) => $message;

 /**
  * php arrow function 도 매우 좋지만 php 에서는 멀티 라인을 지원하지 않는 단점이 있다 주의하기
  */
