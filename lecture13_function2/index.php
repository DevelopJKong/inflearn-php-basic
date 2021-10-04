<?php

/**
 * 
 * return value.
 * 
 * function <name>( .. ) [: <return ... type>]
 */

 function foo() {
     return 'Hello, world';
     //함수는 리턴을 하면 끝이다 수명을 다한다 라고 생각하면 좋을거 같다 
    }

 echo foo(); // => Hello, world

 /**
  * return with context
  */
function foo2(bool $is){
    if($is) {
        return 'Hello, world';
    }
    return 'Bye';
}

echo foo2(true);

function foo3($arg) {
    return $arg;
}

echo foo3('Hello,world');