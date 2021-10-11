<?php

/**
 * Sub String
 * 
 * 아래의 예제와 같은경우에는 '//' 를 뒤에 있는 문자열 //example.com 이 나온다 
 */
 strstr('http://example.com','//');

/**
 * Token
 * 이것은 strstr과는 반대로 '//' 를 포함하지 않고 그 앞의 문자열을 반환해주는 함수이다
*/
strtok('http://example.com','//');

/**
 * Slice
 * 
 * (문자열,시작점,끝점) 이렇게 지정해줄수가 있다
 */
substr('Hello, world', 7 ,strlen('Hello, world') -1);

/**
 * Compare
 * strcom 과 비슷한데 그래도 제대로 알아두어야 할거 같다
 */
 substr_compare('Hello, world','world',-5);
 

/**
 * Replace
 */

substr_replace('Hello, world','Hi',0,4);


/**
 * Count
 */
substr_count('Hello, world','1',0);

/**
 * Wrapping
 * 어디부터 \n를 해줄것인지 를 정해주는 함수
 */
wordwrap('Hello, world',5);