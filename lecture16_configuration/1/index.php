<?php

/**
 * PHP Extension
 */

//load
// 1.var_dump(extension_loaded('mbstring'));
//Get
//var_dump(get_loaded_extensions()); 

 /**
  * include Path
  */
//include 할수있는 전체 링크를 줄여줄수 있다 약간 spring에서 @RequestMapping? 이런 느낌이네
//Set
// set_include_path(__DIR__.'/mylib');
// include 'HelloWorld.php';
// 
// //Get
// var_dump(get_include_path());
// 
// //Reset
// restore_include_path();
//include 'HelloWorld.php' -> Error;

/**
 * Get included File
 */
//포함 된 파일들을 알수있게 해주는 함수
//var_dump(get_included_files());

/**
 * Get php information
 */
//php의 모든 정보를 알수있다 php를 처음 배울때 확인한다
//outputstream으로 간다고 할수있다
//phpinfo();

/**
 * php.ini
*/
// ini_get & int_set 
// ini_set() => ini의 설정을 바꿔줄수 있다 바꾸지 못하는 설정들도 있다
// ini_get() => ini의 설정들을 볼수있다
// ini_restore() => ini의 설정을 되돌릴수있다

/**
 * Environment Variables
 */


/**
 * Case 1. put, geten
 */

 //Set
putenv('APP_='.'production');
//Get
var_dump(getenv('APP_ENV')); // -> production



/**
 * Case 2. $_ENV
 */
$_ENV['APP_ENV'] ='development';
var_dump($_ENV['APP_ENV']); // => development










