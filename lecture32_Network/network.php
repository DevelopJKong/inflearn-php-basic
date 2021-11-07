<?php

/**
 * Http Header
 */
//개발자 도구에서 header를 보게 되면 response, request, cookie, cash 등을 볼수가 있다

//헤더 같은경우에는 쓰기 편하고 자주 사용하기 때문에 php에서는 자세히 알아두는것이 좋다
//Set
header('X-Header: Hello,world');

//Remove
header_remove('X-Header');


/**
 * Http Response Code
 */
//200 성공
//300 리다이렉트
//400 에러관련
//500 서버 에러

//Case 1. http_response_code
http_response_code(404);

//Case 2. header
header('HTTP/1.1 404 Not Found');


//cookie
//쿠키는 브라우저에 저장되는것을 말한다
setcookie('myCookie','Hello,world');

/**
 * Get a Cookie
 */

echo $_COOKIE['myCookie'];


/**
 * Remove a Cookie
 */
//왜 이렇게 했는데 삭제가 되는거지? setcookie에서 시간을 조정해주면? 삭제가 되는건가?
setcookie('myCookie','',time()-3600);





