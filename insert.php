<?php

  $host = 'localhost';
  $user = 'root';
  $pwd = '111111';
  $dbname = 'test';

  $conn = mysqli_connect($host, $user, $pwd, $dbname);

  if(!$conn){
    echo "Server Connect Failed".mysqli_connect_error();
  }

  $sql = 'SELECT user_like FROM userlike';
  $user_like = mysql_query($conn, $sql);
  // $sql = 'INSERT INTO userlike(user_like) VALUES('.count.')';
  if(mysqli_num_rows($user_like) > 0){
    echo $user_like;
  } else{
    echo 'no data';
  }

?>
