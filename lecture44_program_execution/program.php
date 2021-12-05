<?php

/**
 * Command Execution
 */
$output =[];
// -> String
echo exec('dir',$output);

//-> String
shell_exec('dir');

//-> Output stream
system('dir');

//-> String
echo `dir`;

//-> Output stream
passthru('dir');

/**
 * Escaping
 */
// -> "echo 'Hello, world';"
escapeshellarg('echo \'Hello, world\';');
//excapeshellcmd 에 대해서는 조금 더 자세히 알아봐야할거 같다
escapeshellcmd('php --ini && php -r');