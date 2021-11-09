<?php

/**
 * cURL Handling
 */
//HTTP Client 를 대해서 이다 이 부분도..? 어떻게 서버를 실행시키는지 부터 약간 문제인거 같다
//어디서 정확하게 사용하는건가? option을 외우는건 아니고 필요할때 봐서 사용하면 된다

 //Init
 $ch = curl_init();


 //Set Options (GET)

 $queryString = http_build_query([
    'message' => 'Hello, world'
 ]);

 curl_setopt($ch,CURLOPT_HTTPGET,true);
 curl_setopt($ch,CURLOPT_URL,'http://localhost:8080/?'.$queryString);

 //Excution
 curl_exec($ch);

 //Reset
 curl_reset($ch);

 //Set Options (POST)

 curl_setopt($ch,CURLOPT_POST,true);
 curl_setopt($ch,CURLOPT_POSTFIELDS,[
    'message' => 'Hello, world'
 ]);
 curl_setopt($ch,CURLOPT_URL,'http://localhost:8080');

//Exection
curl_exec($ch);

//Close
curl_close($ch);
