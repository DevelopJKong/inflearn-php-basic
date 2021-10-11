<?php

/**
 * Replace
 * 대체할 문자는 무엇인가
 */
echo str_replace('Hello','Hi','Hello, World');
// ('현재 문자','바꿀 문자','문자열');

/**
 * Repeat
 * 반복을 몇번 해줄것인가 
 */

str_repeat("*",5);


/**
 * Split
 * 잘라서 배열로 받아주기
 */

 var_dump(str_split('Hello, world',3));

 /**
  * Word count
  * 문자 카운트 해주기
  */
//0을 주면 int로 받고 1을 주면 배열로 받고 2을? 정확히 알아두는것이 좋을거 같다
  str_word_count('Hello, world',0);

/**
 * Compare
 * 두개의 문자열을 비교해주는 함수
 */
// 이거는 strcmp 이다 str_cmp (x)
 strcmp('Hello, world','Hello, world');

 /**
  * Position
  * 문자열의 인덱스 위치는 반환해주는 함수
  */
//이것도 strpos 이다 str_pos(x)

strpos('Hello, world','o');


/**
 * Frist Position
 * charater 단위로 반환을 해주는 함수
 * 이것은 제대로 알아둘 필요가 있는 함수이다
 */

 strpbrk('Hello, world','Hi');



/**
 * Length
 * 문자열의 길이를 구하는 함수 *****************중요
 */

strlen('Hello, world');


/**
 * Reverse
 * 문자열을 뒤집어주는 함수
 */

 strrev('Hello, world');















