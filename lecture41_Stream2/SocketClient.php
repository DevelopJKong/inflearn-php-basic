<?php

/**
 * Socket Client
 */

 $sock = stream_socket_client('tcp://127.0.0.1:8080',$errno,$errstr);
 
 /**
  * Get data from Server
  */
  fread($sock,1024);
/**
 *  Send data to Server
 */
fwrite($sock,'Hello,world from Client');

/**
 * Close a client
 */
fclose($sock);