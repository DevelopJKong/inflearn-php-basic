<?php

/**
 * Ouput Control
 * 
 * php의 코어 라이브러리 이다
 * readline 보다 더 많이 사용한다
 */

//테스팅할때 많이 사용되기때문에 알아두기는것이 좋다


ob_start();

echo 'Hello, world';
$message = ob_get_contents();

//-> Output stream
// ob_flush();
// 
// ob_clean();

//ob_end_clean() 
//ob_get_clean()
/******복합적으로 사용하기 */
ob_end_flush();


//var_dump($message);

// file_put_contents('php://output','Hello, world');

//control 한다는것은 buffer를 사용하는것인데
//buffering은 임시로 저장해두었다가 필요할때 사용하는것을 말한다
