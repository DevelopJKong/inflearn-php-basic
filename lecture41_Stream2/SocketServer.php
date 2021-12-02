<?php
//Socket 이라는것은 컴퓨터가 소통을 할수있도록 구멍을 뚫어놓는것이라고 할수있다
/**
 * Socket Server
 */

$server = stream_socket_server('tcp://127.0.0.1:8080',$errono,$errstr);


/**
 * Listening
 */

while($sock = stream_socket_accept($server)) {
    stream_socket_get_name($sock,true);
    /**
     * Send data to Client
     */
    fwrite($sock,'Hello, world from Server',1024);
    
    /**
     * Get data from Client
     */
    stream_get_contents($sock);

    fclose($sock);
}
/**
 * Close
 */
fclose($server);


