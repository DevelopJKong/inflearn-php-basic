<?php

/**
 * File Downloads
 * 
 * php.ini
 * 
 * allow_url_fopen, allow_url_include
 */


 $path = filter_input(INPUT_GET ,'path', FILTER_SANITIZE_STRING);
//만약에 아래처럼 경로를 해주지 않으면 중요한 파일들을 다운 받을수있게 되어 버리기 때문에 매우 조심해야한다

 $filepath = realpath(dirname(__DIR__).'/uploads/'.basename($path));

if(file_exists($filepath)) {
    $pathinfo = pathinfo($filepath);
    $accepts = [
        'md'
    ];
    if(in_array(strtolower($pathinfo['extension']),$accepts)){
         header('Content-type: aplication/octet-stream');
         header('Content-Disposition: attachment; filename='. basename($path));
         header('Content-Transfer-Encoding: binary');
         header('Content-Length: '.filesize($path));
        
         readfile($path);
    }
}


