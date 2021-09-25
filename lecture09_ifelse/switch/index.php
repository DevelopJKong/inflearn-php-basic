<?php

$context = 1;
/**
 * switch ~ case.
 * 
 * switch문은 보통 어떤것을 선택을 해야할때 사용을 많이 한다
 */

switch ($context) {
    case 1:
        echo 'Hello, world';
        break; // 여기서 break를 사용하지 않으면 여기서 끝나지 않고 다음으로 넘어가버린다
    case 2:
        echo 'Who are you?';
        break;
    default:
    echo 'Bye';
}


/**
 *  Switch ~ case -> If 
 * 
 * if문은 주로 조건을 두고 싶을때 많이 사용한다
 */

 if ($context == 1) {
    echo 'Hello, world';
 } elseif ($context) {
    echo 'Who are you?';
 } else {
     echo 'Bye';
 }

 /**
  * 얼터네이티브 switch 문도 가능하다
  */

  switch($context):
    case 1:
        echo 'Hello, world';
        break;
    case 2:
        echo 'Who are you?';
        break;
    default:
        echo 'Bye';
    endswitch;







