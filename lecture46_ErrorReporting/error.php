<?php

ini_set('display_errors','on');


/**
 * PHP_ini
 * 
 * display_errors = Off, errors_reporting = 0
 */

 //ini_set('display_errors','off');
 //error_reporting(0); //에러 레벨로 처리한다
 set_error_handler(function(){}); //만약에 에러 function이 비어있으면 처리를 안함 *주로 로그를 남길때 사용*


