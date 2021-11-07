<?php

/**
 * Set session save path
 */
session_save_path('./sessions');

/**
 * Start a Session
 */
//세션 값을 보려면 "애플리케이션"으로 들어가서 "쿠키" 아래에 들어가서 "url"을 보면 된다
//절대로 노출되서는 안된다
session_start();

/**
 * Set Session value with Key
 */

$_SESSION['mySession'] = "hello world";


/**
 * Get Session id
 */
// Session을 얻어오는거 보단 session을 세팅할때 많이 사용한다
session_id();

/**
 * Get Session name
 */
session_name();

/**
 * Run GC(Garbage Collection)
 */
//세션에는 유효기간이 있습니다 가비지 컬렉션에서 유효기간이 지나면 파괴시켜주는데
//오래된 세션을 주로 파괴합니다 유효시간은 15일?을 주기도 30분을 주기도 1시간을 주기도 한다

//php.ini에 지정이 되어 있다
session_gc();

/**
 * Get Session Cookie info
 */
//life time 을 설정해줄수있는데 cookie의 생명주기를 설정해줄수있다
//set
session_set_cookie_params();

//get
session_get_cookie_param();

/**
 * Remove a Session value
 */
//session의 값을 삭제할때는 이렇게 unset을 사용해서 삭제해준다
unset($_SESSION['mySession']);

/**
 * Reset Session 
 */
//session이 모두 초기화가 된다
session_unset();


/**
 * Remove Session file
 */
//php에서는 session_destory를 권장하고 있지는 않다
//네트워크에 오류가 날수있다
//세션 가비지 컬렉션을 돌릴수없는 경우가 있을때는 이렇게 사용하는것이 좋을수있다
session_destory();

/**
 * Get session status
 */
//session을 사용할수있는지 사용할수 없는지 알려준다
session_status();

/**
 * Close session
 */

session_commit();


/**
 * Regenerate Session id
 */

session_regenerate_id();














