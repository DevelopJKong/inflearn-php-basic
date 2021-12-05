<?php

/**
 * One way Process Handling
 */

//내꺼에서는 경로가 조금 다른데 향후 수정을 해야될거 같다
$ph = popen('php'.dirname(__DIR__,3).'lang/BasicSyntax/HelloWorld/index.php','w');

echo stream_get_contents($ph);

pclose($ph);
/**
 * Two way Process Handling
 */
//강의에서 나오는 경로가 다르다 나는 lecture42_readline으로 잡아야 한다
$ph = proc_open(
    'php ./Readline/1/index.php',
    [
        0 => ['pipe','r'], //READ
        1 => ['pipe','w'], //WRITE
        2 => ['file',__DIR__,'/logs/log.log','a'] //ERR
    ],
    $pipes,
    dirname(__DIR__,2)
);
[$readStream,$writeStream,] = $pipes;

$fwrite($readStream,'Hello,world');
stream_get_contents($writeStream);


// Terminate
proc_terminate($ph);
// Close Process
proc_close($ph);