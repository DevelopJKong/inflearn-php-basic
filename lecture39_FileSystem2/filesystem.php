<?php

/**
 * get File info from
 */

$path = dirname(__DIR__,3).'/README.md';


//Case 1. from File handler
$fh = fopen($path,'r');
var_dump(fstat($fh)); // 정확히 fstat는 무슨 뜻이지?

//Case 2. from File name
var_dump(stat($path));


/**
 * get File info Detail 
 */

 //Size
 filesize($path);
 //Modification time
 filemtime($path);

 /**
  * Check file type
  */

is_file($path); //is_file 과 is_dir의 차이점을 정확하게 알아두어야 할거 같습니다
is_dir($path); 
