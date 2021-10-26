<?php
//필터 같은경우에는 내용은 그렇게 많지 않지만 그래도 정말 중요한 내용입니다
/***************************************대표적인 예 */
$_GET['message']; // 이렇게 접근하는것 보다

filter_input(INPUT_GET,'message'); //이렇게 접근해주는것이 훨씬 좋다



/**
 * Filter
 */
//php 를 하면서 무조건 알아야하는 함수이기도 하다 꼭 자세히 알아둘수있도록 하자
//filter_var('Hello,world',FILTER_SANITIZE_STRING); => String이 맞는지 체크를 해준다 하지만 암묵적으로 string으로 변환해준다
echo $message = filter_var('tbaram10@naver.com',FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL);

//꼭 php.net filter에 관하여서 공부를 하는게 좋겠다
//FILTER_SANITIZE_EMAIL
//FILTER_SANITIZE_STRING
//FILTER_SANITIZE_SPECIAL_CHARS
//FILTER_SANITIZE_URL
//FILTER_SANITIZE_ENCODED

echo $message = filter_var('Hello, world',FILTER_CALLBACK,[
    'options' => function($value) {
        return $value;
    }
]);

//FILTER_FLAG는 FILTER_SANITIZE 보다 좀 더 상세한것이라고 볼수있다 이에 대해서 제대로 알아두어야 할거 같다

/**
 * Fix
 */

echo filter_var('<html><head></head></html>',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


/**
 * Has
 */

filter_has_var(INPUT_SERVER,'REMOTE_ADDR');




/** Request
 * $_POST, $_GET, $COOKIE, $_SESSION, $_SEVER, $_REQUEST
 * 
 */
// $_GET = [
//     'message' => 'Hello, world'
// ];
// 
//  filter_input(INPUT_GET);

//var_dump($_SERVER['REMOTE_ADDR']); 에러 발생

//$_ENV['REMOTE_ADDR'] = '127.0.0.1';
//echo filter_input(INPUT_SERVER,'REMOTE_ADDR',FILTER_VALIDATE_IP);
if(array_key_exists('REMOTE_ADDR',$_SEVER)) {
    filter_var($_SERVER['REMOTE_ADDR'],FILTER_VALIDATE_IP);
}

//$_SERVER
//echo filter_input(INPUT_SERVER,'REMOTE_ADDR');







