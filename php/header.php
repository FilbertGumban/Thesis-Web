<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

  <style>
  .header {
      overflow: hidden;
      position: relative;
      background-color: #363A35;
      display: block;
      width: 100%;
      padding: 10px 10px; 
      }

      /* Style the header links */
      .header a {
      float: right;
      color: white;
      text-align: right;
      padding: 12px;
      text-decoration: none;
      font-family: helveticaneue;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
      }
      /* Change the background color on mouse-over */
      .header a:hover {
      background-color: #ddd;
      color: black;
      }
  </style>

  </head>
  <body>
    <nav>
      <div class="header">
        <ul>
          <?php
            if (isset($_SESSION["username"])) {
              echo "<li><a href='../Homepage.php'>Homepage</a></li>";
              echo "<li><a href='includes/logout-inc.php'>Logout</a></li>";
            }
            else {
              echo "<a href='signup.php'>Signup</a>";
              echo "<a href='login.php'>Login</a>";
              echo "<a href='aboutus.php'>About Us</a>";
              echo "<a href='index.php'>Home</a>";
            }
           ?>
        </ul>
      </div>
    </nav>
