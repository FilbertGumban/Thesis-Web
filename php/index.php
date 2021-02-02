<?php
  include_once 'header.php'
?>

<title>Home</title>

<style>
    body {
      background-image: url(../imgs/PageLogin.jpg);
      background-size: 1450px;
      line-height: 420px;
      text-align: center;
      color: white;
      font-family: Proxima Nova;
      font-size: 30px;
    }
</style>
<body>
    <div class="content">
        <section class="intro">
          <?php
            if (isset($_SESSION["userName"])) {
              echo "Hello There" . $_SESSION["userName"] . "</p>";
            }
           ?>
            <h1>Smart Vermicomposting System</h1>
        </section>
    </body>

<?php
  include_once 'footer.php'
?>
