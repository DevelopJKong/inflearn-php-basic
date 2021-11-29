<?php

/**
 * Change a directory
 */
chdir(__DIR__); // ch는 change라고 보면 된다


/**
 * Get current working directory
 */
echo getcwd();

/**
 * Reading a directory
 */
//scandir은 그래도 자주 사용하기 때문에 알아두면 좋을거 같다
$files = scandir(__DIR__, '/../..'); //scan을 사용해서 읽을 수 있다


var_dump($files);
/**
 * Directory Handling
 */
//Open
$dir = opendir(__DIR__,'/../..');

//Read
while($name = readdir($dir)) {
    // var_dump($name);
}
//Reset
rewinddir($dir); // 커서를 초기화한다 

//Close
closedir($dir);
 