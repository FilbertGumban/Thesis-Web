<?php

  if(isset($_POST["submit"])) {

    $userName = $_POST["userName"];
    $email = $_POST["userEmail"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["pwdrepeat"];
}

    require_once 'dbaccounts.php';
    require_once 'functions-inc.php';

    //error handlers

    if (emptyInputSignup($userName, $email, $pwd, $pwdRepeat) !== false) {
      header("location:../signup.php?error=emptyinput");
      exit();
    }
    if (invalidUsername($userName) !== false) {
      header("location:../signup.php?error=invalidUsername");
      exit();
    }
    if (invalidEmail($email) !== false) {
      header("location:../signup.php?error=invalidEmail");
      exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
      header("location:../signup.php?error=invalidPasswords");
      exit();
    }
    if (uidExists($conn, $userName, $email) !== false) {     //check if username exists
        header("location:../signup.php?error=usernametaken");
        exit();
    } else {

      createUser ($conn, $userName, $email, $pwd);
}
