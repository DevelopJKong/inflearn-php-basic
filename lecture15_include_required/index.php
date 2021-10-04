<?php
/**
 * include(_once)
 *  
*/
include 'helloworld.php';
var_dump($message);
foo();

/** 
 * required(_once)
 */

require 'helloworld.php';
var_dump($message);

$arg = include 'helloworld.php';
var_dump($arg);