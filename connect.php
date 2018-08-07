<?php

  $host = 'localhost';
  $user = 'root';
  $pwd = '111111';
  $db = 'test';

  $conn = mysqli_connect($host, $user, $pwd, $db);

  if(!$conn){
    echo "Server Connect Failed".mysqli_connect_error();
  } else{
    echo "Connect Success!!";
  }

?>
