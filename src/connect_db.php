<?php 
  $servername = "192.168.0.77"; // change this to current IP
  $username = "root";
  $password = "root";

  $dbname = "LOGIN";
try {
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    throw new Exception("Connection failed: {$conn->connect_error}");
  }
} catch (Exception $e) {
  die("Error : {$e->getMessage()}");
}