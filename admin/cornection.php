<?php
  $conn = new mysqli('localhost', 'root', '', 'managestudent');
  if($conn->connect_error){
     die("Connection failed: " . $conn->connect_error);
  }

?>