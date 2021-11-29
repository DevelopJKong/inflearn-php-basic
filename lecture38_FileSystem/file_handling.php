<?php

/**
 * File handleing
 */

$path = dirname(__DIR__,3).'README.md';

$fh = fopen($path,'r');

/**
 * File Reading
 */

// Case 1. function
// -> string
file_get_contents($path);

// -> array
file($path);

// -> output stream
readfile($path);


// -> output stream
fpassthru($fh);

// ->
echo fread($fh,filesize($path));



//Case 2. with Loop
//line by line으로 뽑아준다 [무슨 소리인지 모르겠다]
while( $line = fgets($fh) && !feof($fh)){
    var_dump($line);
}

//파일 포인터를 설정해주는 함수
//Set
fseek($fh,0,SEEK_SET);

//Get
ftell($fh);

//is end
feof($fh);

/**
 * File Writing  
 */
$path = './HelloWorld.txt';
$fh = fopen($path,'w');

//Case 1. file_put_contents

file_put_contents($path,'Hello, world');

//Case 2. file handler

rewind($fh);

// -> output stream
fwrite($fh,'Hello, world');
// -> output stream (forch)
fflush($fh);


/**
 * File slice
 */

$fh= fopen($path,'r+');
ftruncate($fh,rand(1,filesize($path)));



/**
 * File handler close
 */
fclose($fh);
