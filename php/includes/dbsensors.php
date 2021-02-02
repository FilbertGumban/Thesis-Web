<?php

//require 'insert.php';

  $servername = 'localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = "sensors";

  $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

  if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
  }

/*$format = "SELECT FORMAT (getdate(), 'dd/MM/yyyy, hh:mm:ss') as Reading_Time";
$datetime = $conn-query($format);*/
