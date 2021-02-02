<?php
  include_once 'header.php';
 ?>

<title>Sign Up</title>

 <style>
     body {
       background-image: url(../imgs/PageLogin.jpg);
       background-size: 1450px;
       text-align: center;
       font-family: Proxima Nova;
       color: #363A35;
       font-size: 20px;
     }
         /* Full-width input fields */
     input[type=text], input[type=password] {
     width: 50%;
     padding: 5px;
     margin:  5px auto 5px auto;
     display: inline-block;
     float: center;
     border: none;
     background: #f1f1f1;
     text-align: center;
     }

     input[type=text]:focus, input[type=password]:focus {
     background-color: #ddd;
     outline: none;
     }


     /* Set a style for all buttons */
     button {
     background-color: #363A35;
     color: white;
     float: center;
     padding: 14px 20px;
     margin: 5px auto;
     border: none;
     cursor: pointer;
     width:  51%;
     opacity: 0.9;
     }


     button:hover {
     opacity: 1;
     }

     h2{
       text-align: center;
       font-family: proximanova;
     }

     custom-select {
      position: relative;
      font-family: Proxima Nova;
      background-color: DodgerBlue;
      }

 </style>

 <section class = "signup-form">
   <h2>Sign Up</h2>
    <div class="signup-fields">
      <form action="includes/signup-inc.php" method="post">
        <input type="text" name="userName" placeholder="Enter Username">
        <input type="text" name="userEmail" placeholder="Enter Email">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <br>
      <div class= "custom-select">
        <select>
          <option value="admin">Admin</option>
          <option value="standard">Standard</option>
        </select>
      </div>
        <button type="submit" name="submit">Sign Up</button>
      </form>
    </div>
 </section>

<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p> Fill in all fields! </p>";
    }

    else if ($_GET["error"] == "invalidUsername") {
      echo "<p>Invalid Username!";
    }

    else if ($_GET["error"] == "invalidEmail") {
      echo "<p>Invalid Email!";
    }

    else if ($_GET["error"] == "invalidPasswords") {
      echo "<p>Passwords does not match!";
    }

    else if($_GET["error"] == "stmtfailed") {
      echo "<p>Something went wrong, try again!";
    }

    else if($_GET["error"] == "usernametaken") {
      echo "<p>Username already taken!</p>";
    }

    else if($_GET["error"] == "none") {
      echo "<p>You have signed up!</p>";
    }
  }
 ?>
