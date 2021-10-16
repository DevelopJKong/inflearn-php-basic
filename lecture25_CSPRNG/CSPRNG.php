<?php

/**
 * rand() vs random_int()
 */
rand(1,5); // 그냥 랜덤 number를 만드는것이다
random_int(1,5); // 랜덤 int를 만들어주는데 조금 더 rand()가 안전하다

/**
 * Create a random bytes
 */
//랜덤 바이트는 만들어줄때는 random_bytes() 를 사용해서 만든다
$bytes= random_bytes(32);
