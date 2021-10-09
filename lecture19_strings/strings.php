<?php
/**
 * Add slashes at Quotes
 */
//Add
$slashe = addslashes("'");
//Remove
stripslashes($slashe);

/**
 * Binary to Hex
 */
// 많이 사용한다 기억을 해두면 좋을거 같다

// bin -> hex
$bytes = random_bytes(32);
// hex -> bin
echo $hex = bin2hex($bytes); 

// 왜 이렇게 굳이 바꿔야하는거지? 바꿔줄 필요가 생기나?
 
 /**
  * One way hash (Encryption)
  * sha1, md5 Not recommend 
  */
crpyt('hello, world','secret');
//단방향 방식이기 때문에 복호화를 할수 없다
//그러면? 단방향 방식으로 암호화하는게 필요한곳이 있나?

/**
 * Split, Join
 */
$url = 'http://example.com';
//split 
explode('//',$url);
//join
echo implode('//',$exp);

/**
 * HTML entites
 */
$html  = <<<'HTML'
<html>
    <body></body>
</html>
HTML;

// Encode
//$encoded = htmlentities($html);

$encoded = htmlspecialchars($html);
//echo $encoded;

// Decode
//echo html_entity_decode($encoded);

echo htmlspecialchars_decode($encoded);

/**
 * Strip HTML Tags
 */

echo strip_tags($html);


/**
 * \n -> <br> tag
 */
//역슬래시 엔을 br 태그로 변경을 해준다
echo nl2br("Hello\world");

/**
 * Char
 */
// char => num
 ord('A'); // => 65
// num => char
 echo chr(65);

 /**
  * Parse Query string
  */
//검색엔진에서 검색을 하고 나온것을 볼때 ? 뒤에 붙어 있는것을 query string이라고 한다
//'a=b&c=d';
$qs ='lang=php&addr=127.0.0.1';
// php의 참조변수에 대해서 자세히 알아두어야 할거 같다 
// &$arr 와 같이 되어 잇는 경우에는 굳이 변수를 따로 선언하지 않아도 바로 사용할수가 있다
var_dump($qs,$arr);


/**
 * Number Format
 */
// 넘버 포맷을 사용하면 3개씩 , 으로 표시를 해준다
// money_format 함수도 있긴 하지만 window에서는 지원을 해주진 않는다
// 리눅스에서는 있을수도 있다
echo number_format(123456789);

/**
 * Case
 */
echo strtoupper('Hello, world');
echo strtolower('Hello, world');

/**
 * Remove spaces
 */
trim('Hello, world');


/**
 * Replace
 */
strtr('Hello, world',[
 'Hello, world' => '안녕하세요'
]);












