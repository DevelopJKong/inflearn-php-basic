<?php

/**
 * 
 * Comparison Operators
 */

 //php 는 명시적으로 자료형이 없는데 자료형까지 비교해주는것이 "===" 이다
 var_dump(10 == '10'); // -> true;
 var_dump(10 === '10'); // -> false;
 var_dump(10 !== 10); // -> false;
 var_dump(10 != 10); // -> true;

 var_dump(10 > 20); // -> false;
 var_dump(10 <=> 20); // php 의 우주선 연산자로 같으면 0 작으면 -1 크면 1을 반환한다

 var_dump('ab' < 'ac' ); // php 에서는 문자열까지 크기를 비교할수있는데 이처럼 하면 true를 반환한다
