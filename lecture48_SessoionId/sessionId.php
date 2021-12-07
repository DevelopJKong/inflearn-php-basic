<?php

session_save_path(dirname(__DIR__).'/lecture48_SessoionId/session');
session_start();

/**
 * #Cookie
 * 
 * //PHPSESSID=123456789    // 만약에 모드를 수정했을경우 이렇게 session을 조절할수잇는데 이렇게 하면 
 *                          // 보안에 취약해지기 때문에 절대 하면 안된다
 * session.use_strict_mode
 * 
 * session.use_cookies
 * session.use_only_cookies
 */


/**
 * # Javascript Injection
 * 
 * session.cookie_httpOnly
 */
//이렇게 만약에 httpOnly를 0를 사용하게 되면 자바스크립트 인젝션을 사용해서 공격을 할수있다
 echo '<script>document.write(document.cookie)</script>';


/**
 * #https
 * 
 * session.cookie_secure
 */
// 현재는 http 로 공부를 하고 있기때문에 사용은 못하지만
// 사용할수있다면 이것을 사용하는것이 좋다