<?php

/**
 * if
 * [],'',false,0,null
 */

 if(true) {
    echo 'Hello, world';
 }

 /**
  *  if ~ else.
  */

  if(true) {
     echo 'Hello, world';
  } else {
     echo 'Bye';
  }

  /**
   * if ~elseif ~ else.
   */

   if(false) {
      echo 'Hello, world';
   } elseif (true) {
      echo 'Who are you';
   } else {
      echo 'Bye';
   }


/**
 *  Define Variable in If Context
 */

 // 이 부분은 신기하네
   if($message = false){
      echo $message;
   }


/**
 * 얼러네이티브 if문 이 방식은 조금 신기하다
 */
if(false):
   echo 'Hello, world';
elseif (true):
   echo 'Who are you';
else:
   echo 'Bye';
endif;









