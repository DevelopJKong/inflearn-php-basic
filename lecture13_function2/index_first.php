<?php


/**
 * first class function
 */

 //익명함수
 $foo = function () {
     return 'Hello, world';
 };

 echo $foo();

 //콜백 함수
function foo($callback) {
   echo $callback();
}

foo(
    function(){
        return 'Hello, world';
    }
);


 /**
  * Higher-order function
  */

function foo2(){
    return function(){
        return 'Hello, world';
    };
};

$func = foo2();
echo $func(); // -> Hello world






