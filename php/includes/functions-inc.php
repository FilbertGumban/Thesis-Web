<?php

  function emptyInputSignup($userName, $email, $pwd, $pwdRepeat) {
    $result;
    if (empty($userName) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
      $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  }

  function invalidUsername($userName) { //if not a proper username
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
      $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  }

  function invalidEmail($email) { //if not a proper username
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  }

  function pwdMatch($pwd, $pwdRepeat) { //if not a proper username
    $result;
    if ($pwd !== $pwdRepeat) {
      $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  }

  function uidExists($conn, $userName, $email) { //if not a proper username
    $sql = "SELECT * FROM users WHERE usersId = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../signup.php?error=stmtfailed");
      exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $userName, $email); //ss is just setting 2 strings
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row =  mysqli_fetch_assoc($resultData)) {
      return $row;
    }
    else {
      $result = false;
      return $result;
    }

    mysqli_stmt_close($stmt);
  }


  function createUser($conn, $userName, $email, $pwd) {
    $sql = "INSERT INTO users (userName, userEmail, password) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../signup.php?error=stmtfailed");
      exit();
    }

    //hashing the Password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sss", $userName, $email, $hashedPwd);  //ss is just setting 3 strings
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location:../signup.php?error=none"); //directs the user after creating the account
    exit();
}


//login
function emptyInputLogin($userName, $pwd) {
  $result;
  if (empty($userName) || empty($pwd)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $userName, $pwd) { //if the user exists in the database
  $uidExists = uidExists($conn, $userName, $userName);

  if ($uidExists === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  $pwdHashed = $uidExists["password"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }
  else if ($checkPwd === true) {
    session_start();
    $_SESSION["userId"] = $uidExists["usersId"];
    $_SESSION["userName"] = $uidExists["userName"];
    header("location: ../homepage.php");
    exit();
  }
}
