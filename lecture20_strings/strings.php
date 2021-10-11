<?php

/**
 * Print formatted string
 * 
 *  -> %s String
 *  -> %d Int
 *  -> %f Float
 */


//printf 같은경우에는 자주 사용하기 때문에 알아두는것이 좋다
$message ='Hello, world'; 

 printf("%s",'hello, world');
 printf("%d",1234);
 printf("%10.2f",14.24);

 //아래 코드는 모두 똑같다 
 //아래 코드는 제대로 알아두는것이 좋을거 같다
 printf("%s, %d", ...[$message,10]);
 vprintf("%s, %d",[$message,10]);

 /**
  * Buffering
  */
  // php의 Buffering 에 대해서 제대로 알아두는것이 또 좋을거 같다
  // sprintf,printf,vsprintf 알아두기 
 $buf = sprintf("%s",'Hello,world');
 sprintf("%s, %d", ...[ $message , 10]);
 vsprintf("%s, %d",[ $message,10 ] ); 