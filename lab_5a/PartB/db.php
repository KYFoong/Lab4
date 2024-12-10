<?php
function db_con(){
  $servername = "localhost";
  $db_name = "lab_5b";
  $username = "root";
  $password = "";

  $conn = new mysqli($servername, $username, $password, $db_name);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  return $conn;
}
?>