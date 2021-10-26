<?php
$message =  'Hello, world';
/**
 * Set type (type casting) 
 */
/**
 * Get type
 */


//Get
echo gettype($message);

//Set
settype($message, 'int');

//이렇게 하면 int로 바뀐것을 볼수가 있다
echo $message;


/**
 * Check Type
 */

//Int 
is_int(10);
//String
is_string('Hello,world');

//is_iterable 이라고 하면 foreach를 사용할수있는 타입인지
//확인해준다
echo is_iterable([]);

/**
 * Value check
 */

//isset 같은경우에는 굉장히 많이 사용한다
isset($message);
//$message = null;
echo empty($message);

/**
 * Convert to
 */
//var_dump(boolval(0));
//int -> string
//strval을 사용해주면 int 타입을 string 타입으로 변경해준다
strval(10);

/**
 * Print
 */
$var = [
    'message' => 'Hello, world'
];

/**주로 print_r 과 var_dump를 많이 사용한다 */
//print_r 은 for Reading => 읽기 위해서 많이 사용한다
//print_r($var);

//var_dump는 for Deduging => 디버깅을 하기 위해서 많이 사용한다
//var_dump($var);

//var_export는 for Expression => 표현을 하기 위해서 많이 사용한다
//var_export($var);

//var_export는 처음 보는데 설명으로는 php에서 표현할수있는 형태로
//변경을 해준다
//무슨 말인지 정확하게 알아둘 필요가 있다
var_export($var);


/**
 * serialize
 */
$serializedArray = serialize($var);
$arr = unserialize($serializedArray);

var_dump($arr);

/**
 * Free 
 */

unset($arr);
//메모리에서 변수가 할당이 해제가 된다
//그럼 어떻게 되는거지?

/**
 * Get defined ...
 */
//Variable
//변수에 대한 조회?
//제대로 알아둘 필요가 있다
get_defined_vars();

//Constants
get_defined_constants();

/**
 * Constants
 */
// 이 부분도 제대로 알아둘 필요가 있다
const MESSAGE = 'Hello, world';
echo defined('MESSAGE');

if(defined('MESSAGE')){
    constant('MESSAGE');
}