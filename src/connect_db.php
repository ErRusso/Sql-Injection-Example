<?php 
  $servername = "mysql";
  $username = "root";
  $password = "root";

  $dbname = "LOGIN";
try {
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) throw new Exception("Connection failed: {$conn->connect_error}");
} catch (Exception $e) {
  die("Error : {$e->getMessage()}");
}