<?php

if (isset($_POST["submit"])) {

  require_once 'dbaccounts.php';
  require_once 'functions-inc.php';

  $userName = $_POST["userName"];
  $pwd = $_POST["password"];
}



if (emptyInputLogin($userName, $pwd) !== false) {
  header("location: ../homepage.php");
  exit();
} else

  loginUser($conn, $userName, $pwd) {
  header("location: ../homepage.php")
};
