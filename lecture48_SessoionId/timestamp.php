<?php

session_save_path(dirname(__DIR__).'/lecture48_SessoionId/session');

/**
 * Cookie time, GC
 */
ini.set('session.gc.maxlifetime',3);
session_set_cookie_params(3);

session_start();
//session_gc();


/**
 *  Timestamp based session
 */
 $_SESSION['timestamp'] = $_SERVER['REQUEST_TIME'];
 $time = strtotime('+10 seconds');
 $diff = $time - $_SESSION['timestamp'];

 $sessionTimeOut = 10;

 if($diff > $sessionTimeOut) {
     echo 'Session TimeOut';
     exit;
 }

/**
 *  Renewal session
 */
session_regenerate_id();
 $_SESSION['timestamp'] = time();


