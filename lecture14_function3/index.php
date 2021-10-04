<?php

/**
 * Access Global Variables
 */

 //php의 스코프는 총 두가지가 있다
 //하나는 function scope 이고 
 //다른 하나는 global scope 이다

 $message = 'Hello, world';

 function foo(){
     //global $message;
     
     //php 가 가지고 있는 배열
     $message = $GLOBALS['message'];

     echo $message;
 }

 foo();
 echo $message;
 //참조에 대해서 간단하게 설명을 해주셨는데 참조에 대해서 명확하게 알고 가야할거 같다

 /**
  * Static variables
  */

function foo2(){
    static $count =0;
    return ++$count;
}

echo foo2();
echo foo2();
// static 을 하지 않으면 function scope 에서 끝나지만 static을 추가하면 메모리를 저장하고
// 출력해준다

/**
 * Closure
 */

 function foo3($arg) {
     echo $arg;
     return function() use($arg){
         return $arg;
     };
 };

 foo3('Hello, world');

 //use는 진짜 어려운거 같다.. use 키워드에 대해서 제대로 알아두어야 할거 같다..








