<?php

/**
 * Set assert options
 * 
 * PHP.ini
 * 
 * zend.assertions =1
 */

 //ini_set('zend.assertions',1); => zend.assertions 같은경우에는 이렇게 사용해서 바꿔줄수 없다


 /**
  * Assert
  * ASSERT_ACTIVE
  * ASSERT_WARNING
  * ASSERT_BAIL
  * ASSERT_OUIET_EVAL
  * ASSERT_CALLBACK
  *
  */

  //Active
  assert_options(ASSERT_ACTIVE,true);
  //Stop testing on failure
  assert_options(ASSERT_BAIL,false);
  //PHP Trace
  assert_options(ASSERT_WARNING,true);
  //Callback
  assert_options(ASSERT_CALLBACK,'assertFailure');

  function assertFailure( ... $arg) {
      var_dump($args);
  }

  /**
   * Assert
   */

   assert(false,__LINE__);