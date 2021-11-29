<?php

/**
 * from Path
 */
//basename은 경로의 마지막 부분을 추출해주는 함수
//-> index.php 
echo basename(__FILE__); 

//-> C:\Bitnami\wampstack-7.4.23-0\apache2\htdocs\php_inflearn
echo dirname(__FILE__,2);

/**
 * to Absolute Path
 */
realpath('.');

/**
 * Get path info
 */
var_dump(pathinfo(__DIR__));

/**
 * Find Files  
 */
//Glob
// 이름과는 상관없이 php 파일을 찾아준다
glob('./*.php');


/**
 * File name check
 */
//이렇게 사용하는것보다는 정규표현식을 사용하는것이 좋다
fnmatch('./*php','index.php');

/**
 *  File(Directory) Control
 */
copy('./index.php','./file_function.php');
//Make a directory
mkdir('./sessions');
//Remove a file
unlink('./file_functions.php');
//Remove a directory
rmdir('./session');

