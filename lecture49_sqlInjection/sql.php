<?php

$conn = mysqli_connect('localhost:3307','root','123456',"jeongkong");
 
$_POST = [
     'email' => 'tbaram10@naver.com', // "'or 1='1" 이렇게 말도 안되는 데이터로 접근이 가능하다
     'password' => 'secret'  
];
['email' => $email, 'password' => $password] = $_POST;

//이렇게 사용할때는 검증을
//filter_int
//filter_var 로 검증을 해주어야 한다

/**
 * Case 1. Injection
 */

//아마 안될거임 왜냐면 users 라는 테이블도 없고 email 이라는 컬럼도 없음

//SELECT * FROM users WHERE email = '' or 1='1'
$result = mysqli_query($conn,"SELECT * FROM users WHERE email = '($email)' LIMIT 1 ");

/**
 * Case 2. Prepare Statement
 */
$stmt = mysqli_prepare($conn,"SELECT * FROM users WHERE email = ? LIMIT 1");

mysqli_stmt_bind_param($stmt,'s',$email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

/**
 * Successful?
 * 
 */

if(mysqli_num_rows($result)) {
    echo 'Hello, world';
}