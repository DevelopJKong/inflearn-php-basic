<?php
/**
 * TimeZone
 */

 //Set
 date_default_timezone_set('Asia/Seoul');
 //Get
 var_dump(data_default_timezone_get());


 /**
  * Get time : Unix Timestamp
  */
$t = time();

//Case 1. localtime
var_dump(localtime($t,true));

//Case 2. getdate
var_dump(getdate($t));

/**
 * 
 * Timestamp format
 */

//strf vs date 의 사용법에 대해서 정확하게 알아두어야 할거 같다
//Case 1. strftime
echo strftime('%d/%m/%Y %H: %M:%S',$t);
//Case 2. date
echo date('d/M/Y H:i:s');

/**
 * Make a timestamp
 */
echo $timestamp = mktime('1','15','30');
echo date('d/m/Y H:i:s',$timestamp);

/**
 * Parsing String time
 */
// -> window에서는 따로 사용해볼수없다
//strptime(strftime('%d/%m/%Y %H: %M:%S',$t),'%d/%m/%Y %H: %M:%S');

/**
 * String to time
 */
//유용하게 사용할수있으니 꼭 알아두기
echo strtotime('+2 days');

/**
 * Script time execution time check
 */

 $stime = microtime(true);
 sleep(1); // 딜레이를 줄수있다 라고 생각하면 된다

echo microtime(true) - $stime;




