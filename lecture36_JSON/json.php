<?php
/**
 * JSON Encode / Decode
 */
//Encode
 $jsonEncoded = json_encode([
    'message' => 'Hello, world'
 ]);

//Decode
var_dump(json_decode($jsonEncoded,true));