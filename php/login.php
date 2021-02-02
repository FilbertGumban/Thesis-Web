<?php
  include_once 'header.php'
?>

<title>Login</title>


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
</style>

<body>
    <section class="login-form">
        <h2>Login</h2>
      <div class="login-fields">
        <form action="homepage.php" method="post">
          <input type="text" name="userName" placeholder="Enter Username" required>
          <input type="password" name="password" placeholder="Enter Password" required>
          <button type="submit" name="submit">Login</button>
        </form>
      </div>
</body>
<?php
                if(isset($_GET["error"])) {
                  if ($_GET["error"] == "emptyinput") {
                    echo "<p> Fill all empty fields! </p>";
                  }
                  else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect Login Information!</p>";
                  }
                }
?>
    </section>
