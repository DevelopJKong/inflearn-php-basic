<?php

/**
 * Create a hash value for password
 */
//hash vs crpyt 에 대해서 정확하게 알아두어야 할거 같다
//$hash = password_hash('Hello, world',PASSWORD_DEFAULT); //이렇게와
$hash = crypt('Hello,world','rl');

/**
 * Verify password hash
 */
var_dump(password_verify('Hello, world',$hash));    // 이렇게를 사용하면 헷갈릴것없이 
                                                    // 훨씬 편하다라고 할수있다
//var_dump(hash_equals($hash, crypt('Hello, world','secret')));

/**
 * Get info
 */

 var_dump(password_get_info($hash));

 /**
  * Rehash
  */

$hash = password_hash('Hello, world',PASSWORD_DEFAULT,[
    'cost' => 10
]);

$options = [ 'cost',11 ];

var_dump(password_needs_rehash($hash,PASSWORD_DEFAULT,$options));