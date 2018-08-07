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
  $result = mysqli_query($conn, $sql);
  // $sql = 'INSERT INTO userlike(user_like) VALUES('.count.')';
  if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      // echo $row['user_like'];
      $count = $row['user_like'];

      // update like
      echo ++$count;
      $sql = "UPDATE userlike set user_like=".$count;
      if(mysqli_query($conn, $sql)){
        echo "update success";
      } else{ echo 'update error '.mysqli_error($conn);}

  } else{
      echo 'no data';
  }


?>
