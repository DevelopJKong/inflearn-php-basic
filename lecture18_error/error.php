<?php

/**
 * Log level
 */
//에러에 대해서는 자세히 알아놔야할거 같다

//꼭!!!!!!!!!!!!!!!!!!!!!!!!!! 알아두기
error_reporting(E_ALL & ~E_NOTICE);

/**
 * Send Error Log
*/

//꼭!!!!!!!!!!!!!!!!!!!!!!!!!! 알아두기
error_log("Hello,world",3,__DIR__.'/logs/log.log');

/**
 * Backtrace
 */
function foo() {
    //debug_print_backtrace();
    var_dump(debug_backtrace());
}
foo();

/**
* Ignore Error
*/

function foo2() {
    asdasdasd;
}

//@ Operator. => 에러를 무시해주는 효과를 가지고 있다
//하지만 절대 사용해서는 안된다 가급적 지양하자
//@foo2();

/**
 * Error handling
 */

//꼭!!!!!!!!!!!!!!!!!!!!!!!!!! 알아두기
set_error_handler(function ($errno,$errstr) {
    switch ($errno) {
        case E_USER_ERROR:
            var_dump($errstr);
            break;
        }    
});
// Reset
//restore_error_handler();



/**
 * Trigger Custom Error
 */

trigger_error('Hello,world', E_USER_ERROR);


