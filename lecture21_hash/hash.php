<?php
/**
 *  Get Hash algrithms
 */
//해시는 보안에 관련되어 있다고 보면된다
//sha1
//md5

var_dump(hash_algos());

/**
 *  Create a hash
 */

echo $hash = hash('sha256','Hello, world');
//해시 함수는 해시를 보고 추측을 할수 없어야 한다

$hash = crypt('Hello, world','secret');

/**
 * Check a hash 
 */
var_dump(hash_equals($hash,hash('sha256','Hello,world')));

/**
 * Hash Handler
 */
$h = hash_init('sha256');
hash_update($h,'Hello,world');
hash_final($h);

/**
 * HMAC
 * 
 * Hash-based Message Authentication Code
 * 
 * key -> "secret"
 */
var_dump(hash_hmac_algos());

hash_hmac('sha256','Hello, world','secret');
hash_equals($hash,hash_hmac('sha256','Hello, world','secret'));



