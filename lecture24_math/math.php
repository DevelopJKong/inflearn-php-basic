<?php

/**
 * Absolute
 */
//절대값
echo abs(-1); 

/**
 * Floating Point
 */
echo ceil(6.8); //올림
echo floor(6.8); //내림
echo round(6.56,2); // 반올림 (value,올릴 자리수);


/**
 * hex => dec
 */
//16진수에서 10진수로 바꿔주는 함수
$bytes = radom_bytes(2);
$hex = bin2hex($bytes);
$hex_f = hexdec('F');

/**
 * Max, Min
 */
//최댓값, 최솟값
echo max(range(1,5)); // range() => 1부터 5까지의 배열을 만들어준다
echo min([1,2,3,4,5]); 

/**
 * a^b
 */
echo 2**4;
pow(2,4);


/**
 * Create a random int
 */
rand(0,10); // rand(x,y) x부터 y까지의 수를 랜덤으로 뽑아준다

/**
 * Square root
 */

sqrt(16);