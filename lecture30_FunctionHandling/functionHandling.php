<?php

// function foo(String arg){}
// function foo(String arg, int num){}
// 위처럼 사용하면 자바에서는 오버로딩을 해줄수있는데 php에서는 허용하지 않는다

function foo($arg1) {
    /**
     * Get params number
     */

     $argCount = func_num_args();
     switch($argCount) {
        case 1:
            echo func_get_arg(0);
            break;
        default:
            var_dump(func_get_args());
     }
}
/**
 *  Call
 */
call_user_func('foo','Hello','world',10);

/**
 * Check function exists
 */
var_dump(function_exits('foo'));

/**
 * Get defined functions
 */

var_dump(get_defined_functions());

/**
 * Call function when exiting script
 */

register_shutdown_function(function(){
    echo 'Exit';
});






