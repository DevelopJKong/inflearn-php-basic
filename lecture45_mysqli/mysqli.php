<?php

//http://docs.php.net/manual/en/book.mysqli.php

/**
 * Connection
 */
    
 $conn = mysqli_connect('localhost:3307','root','123456',"jeongkong");

//Query

/**
 * Case 1. mysqli_query
 */
// $queryString = 'CREATE TABLE tests (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     message VARCHAR(255)
// )';
// 
//  mysqli_query($conn,$queryString);


/**
 * Case 2. mysqli_prepare
 */

mysqli_autocommit($conn,false); //transaction

//************ INSERT

 
 $stmt =  mysqli_prepare($conn,"INSERT INTO tests(message) VALUES(?)");

 $param = ['Hello, wordl'];

 mysqli_stmt_bind_param($stmt,'s', ... $param);

 mysqli_stmt_execute($stmt);

//***********  SELECT

$stmt = mysqli_prepare($conn,'SELECT message FROM tests');
mysqli_stmt_execute($stmt);

mysqli_rollback($conn); //transaction

//SELECT Case 1. mysqli_stmt_get_result

// $result = mysqli_stmt_get_result($stmt);
// while($row = mysqli_fetch_assoc($result)){
//     var_dump($row); // row & tuple & record 라고 다양하게 얘기한다
// }


//SELECT Case 2. mysqli_stmt_fetch
//비구조화 할당

mysqli_stmt_bind_result($stmt,$message);
while($row = mysqli_stmt_fetch($stmt)){
    var_dump($message);
}



/**
 * Close connection
 */
//mysqli_query($conn,'DROP TABLE tests');
