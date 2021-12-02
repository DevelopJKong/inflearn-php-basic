<?php

/**
 * Stream context
 * 
 * http://docs.php.net/manual/en/context.php
 */
$context = stream_context_create();

stream_context_set_option($context,[
    'http' => [
        'method' => 'GET',
    ]
    ]);

    file_get_contents('http://example.com',false,$context); //stream 와퍼는 정확히.. 뭐지?

/**
 * Stream filter
 * 
 * http://docs.php.net/manual/en/wrappers.php
 */

//stream 으로 데이터를 보내는데 특정 데이터만 골라서 받는 방법
//filtering을 해서 받는 방법이 있다

stream_get_filters();   

$fh = fopen(dirname(__DIR__,3) . '/README.md','r');

stream_filter_append($fh,'string.toupper');

stream_get_contents($fh);




/**
 * Stream Wrappers
 * 
 * http://docs.php.net/manual/en/wrappers.php
 */

// file:// — Accessing local filesystem
// http:// — Accessing HTTP(s) URLs
// ftp:// — Accessing FTP(s) URLs
// php:// — Accessing various I/O streams
// zlib:// — Compression Streams
// data:// — Data (RFC 2397)
// glob:// — Find pathnames matching pattern
// phar:// — PHP Archive
// ssh2:// — Secure Shell 2
// rar:// — RAR
// ogg:// — Audio streams
// expect:// — Process Interaction Streams

stream_get_wrappers();

$fh = fopen('php://output','w');

fwrite($fh,'Hello, world');

//stream context & stream wrapper & stream filter 에 대해서 다시 정확하게 알아두어야 할거 같다





