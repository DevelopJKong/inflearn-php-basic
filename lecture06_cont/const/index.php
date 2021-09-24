<?php
/**
 * Define Constants
 * 
 */

 //현재적인 방법
 const CONSTANT = 'hello world';
 const CONSTANT_NUM = 10;
 const CONSTANT_BOO = true;
 const CONSTANT_NULL = null;
 const CONSTANT_ARR = [
     'message' => 'hello, world'
 ];

 //옛날방식
 define("CONSTANT_D","옛날 방식");


echo CONSTANT;
echo CONSTANT_NUM;
echo CONSTANT_BOO;
echo CONSTANT_NULL;
echo CONSTANT_ARR['message'];
echo CONSTANT_D;

 ?>
 