<?php

//const MESSAGE = 'Hello, world';
/**
 * Constants  Scope.
 */
function foo() {
    define('MESSAGE','Hello, world');
    
}

foo();

echo MESSAGE; //-> Hello,world;

/**
 *  Callback (Don't need 'use')
 */
$foo = function() {
    return MESSAGE;
};

echo $foo();
