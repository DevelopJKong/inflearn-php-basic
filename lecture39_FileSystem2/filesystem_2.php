<?php

/**
 * Hard link
 */
//강한 연결이라고 생각하면 된다

link(__FILE__,'/file_functions.php');
echo 'hello';

//왜 나는 정확하게 생긱지 않는거지? 어디서 잘못된거지?


/**
 * Symlink
 */
//바로 가기 라고 생각하면 된다

//본질적으로 사용하는 방법이 다르다고 보면된다 눈속임이다
sysmlink(__FILE__,'sym_file_functions.php');

//링크 파일을 읽어올때
//-> string
//-> 주소 반환
readlink('./sym_file_functions.php');