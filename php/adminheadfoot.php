<<<<<<< current
<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--script>

  $(document).ready(function(){
        setInterval(function() {
          $('#table-data').load("Update.php");
        }, 10000);
    });

  $(document).ready(function(){
    setInterval(function() {
      $('#chart-container').load("Update.php");
    }, 10000);
  })

</script-->

  <head>
    <meta charset="utf-8">
  <style>

body {
  padding-top:10px;
  padding-bottom: 10px;
}
  .fixed-header {
      overflow: hidden;
      position: relative;
      background: rgba(76, 175, 80, 0);
      display: block;
      width: 100%;
      }

  .fixed-footer {
          overflow: hidden;
          position: fixed;
          background: rgba(190,190,190, 1);
          display: block;
          width: 100%;
          }

  .fixed-header{
    top:0;
  }

  .fixed-footer{
    text-align: left;
    font-size: 12px;
    color: black;
    bottom: 0;
  }

  h3 {
    text-align: center;
  }

  p{
    text-align:center;
  }
  .container1 {
    width: 80%
    margin: 0 auto;
  }


      /* Style the header links */
      .fixed-header a {
      float: right;
      color: white;
      text-align: right;
      padding: 12px;
      text-decoration: none;
      font-family: helveticaneue;
      font-size: 12px;
      line-height: 25px;
      border-radius: 4px;
      }

      /* Change the background color on mouse-over */
      .fixed-header a:hover {
      background-color: #ddd;
      color: black;
      }

  </style>

  </head>
  <body>
      <div class="fixed-header">
        <div class="container1">
          <nav>
            <ul>
            <?php
                echo  '<div id="text"></div>';
                  echo "<a href='../php/index.php'>Logout</a>";
                  echo "<a href='Setting.php'>Settings</a>";
                  echo "<a href='ReportPage.php'>Reports Page</a>";
                  echo"<a href='Homepage.php'>Home</a>";
                echo '</div>';
               ?>
            </ul>
          </nav>
        </div>
      </div>

      <div class="fixed-footer">
        <h3>Smart Vermicomposting Technology</h3>
        <p>
          Devt. 2020: All Rights Reserved
          </p>
      </div>
=======
<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--script>

  $(document).ready(function(){
        setInterval(function() {
          $('#table-data').load("Update.php");
        }, 10000);
    });

  $(document).ready(function(){
    setInterval(function() {
      $('#chart-container').load("Update.php");
    }, 10000);
  })

</script-->

  <head>
    <meta charset="utf-8">
  <style>

body {
  padding-top:10px;
  padding-bottom: 10px;
}
  .fixed-header {
      overflow: hidden;
      position: relative;
      background: rgba(76, 175, 80, 0);
      display: block;
      width: 100%;
      }

  .fixed-footer {
          overflow: hidden;
          position: fixed;
          background: rgba(190,190,190, 1);
          display: block;
          width: 100%;
          }

  .fixed-header{
    top:0;
  }

  .fixed-footer{
    text-align: left;
    font-size: 12px;
    color: black;
    bottom: 0;
  }

  h3 {
    text-align: center;
  }

  p{
    text-align:center;
  }
  .container1 {
    width: 80%
    margin: 0 auto;
  }


      /* Style the header links */
      .fixed-header a {
      float: right;
      color: white;
      text-align: right;
      padding: 12px;
      text-decoration: none;
      font-family: helveticaneue;
      font-size: 12px;
      line-height: 25px;
      border-radius: 4px;
      }

      /* Change the background color on mouse-over */
      .fixed-header a:hover {
      background-color: #ddd;
      color: black;
      }

  </style>

  </head>
  <body>

      <div class="fixed-header">
        <div class="container1">
          <nav>
            <ul>
            <?php
                echo  '<div id="text"></div>';
                  echo "<a href='../php/index.php'>Logout</a>";
                  echo "<a href='Setting.php'>Settings</a>";
                  echo "<a href='ReportPage.php'>Reports Page</a>";
                  echo"<a href='Homepage.php'>Home</a>";
                echo '</div>';
               ?>
            </ul>
          </nav>
        </div>
      </div>

      <div class="fixed-footer">
        <h3>Smart Vermicomposting Technology</h3>
        <p>
          Devt. 2020: All Rights Reserved
          </p>
      </div>
>>>>>>> before discard
