<?php 
  include_once("connect_db.php");

  $i_usr = $_POST["username"]; // [SQL INJECTION] ' OR '1'='1' -- 
  $i_pwd = $_POST["password"];

  $query = "SELECT * FROM users WHERE username = '{$i_usr}' AND password = '{$i_pwd}';";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    echo "Login success!";
  } else {
    echo "Login failed!";
  }
  $conn->close();

?>