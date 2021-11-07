<?php

/**
 * base64 Encode / Decode
 */
//Encode
$base64Encoded = base64_encode('hello, world');

//Decode
base64_decode($base64Encoded);

//인코드와 디코드를 해주는 함수입니다 하지만
//디코드를 해주는 함수가 이미 존재하기 때문에 보안과는 인연이 있지는 않다

/**
 * (as Http client) Get Headers
 */

get_headers('https://example.com'); // 클라이언트 입장에서 헤더를 가지고 오는 함수이다

/**
 *  (as Http client) Get meta tags
 */

get_meta_tags('https://example.com');

/****************************************************************반드시 알아두기 */
/**
 * Build a query string
 */
//http_build_query
//쿼리 스트링 을 받을때
echo http_build_query([
    'lang' => 'php',
    'message' => 'Hello, world'
]);
/****************************************************************반드시 알아두기 */
/**
 * parse URL
 */
//url을 배열로 반환해준다 //*******정확히 알아두면 좋을듯 */
parse_url('http://example.com');

/**
 * URL Encode / Decode
 */
//소통을 하기 쉽게 이렇게 url encode decode를 사용한다
//Encode 
echo $urlEncoded = urlencode('안녕하세요');

urldecode($urlEncoded);














