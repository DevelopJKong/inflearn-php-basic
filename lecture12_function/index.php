<?php

/**
 * Define function
 * 
 */
//함수는 중복을 줄여줄수 있다는것의 관점에서 굉장히 중요하다

function foo() {
    for ($i=0; $i <10 ; $i++) { 
        echo $i;
    }    
}

foo(); // -> 0~10 출력

/**
 * Variable function
 */

 $fn = 'foo';
 $fn();

 // 위처럼 사용하면 가변 함수로 사용할수있다 특수한 상황에서 사용하기 때문에 그렇게 빈번하게 사용하진 않는다

 