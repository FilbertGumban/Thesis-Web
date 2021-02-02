<?php
  include_once 'adminheadfoot.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>


<html>
	  <link rel="stylesheet" href=../css/Homepage.css>

</head>
	<title>Homepage</title>

<body>

<h1>Sensors Data</h1>

<?php
  require 'includes/dbsensors.php';



  echo '<div class="container">';

      echo '<div class="table">';
        echo '<div class = "table-header">';
        /*echo  '<div class="header-item"><a id="sm" class="filter-link filter-link--number" href="#">Moisture</a></div>';
        echo  '<div class="header-item"><a id="temp" class="filter-link filter-link--number" href="#">Temperature</a></div>';
        echo  '<div class="header-item"><a id="us" class="filter-link filter-link--number" href="#">Ultrasonic</a></div>';
        echo  '<div class="header-item"><a id="wf" class="filter-link filter-link--number" href="#">Waterflow</a></div>';*/
        echo  '<div class="header-item"><a id="vw" class="filter-link filter-link--number" href="#">Vermicast Weight</a></div>';
        echo  '<div class="header-item"><a id="rt" class="filter-link filter-link--number" href="#">Recorded/Harvest Time</a></div>';
        echo '</div>';

    echo '<div class="table-content" id = "table-data">';


  $sql = "SELECT * from sensorsdata WHERE W_Meter > 0 order by Reading_Time desc;";
  $result = $conn->query($sql);


  if(!$result){
    trigger_error('Invalid query: ' . $conn->error);
  }


  if($result -> num_rows > 0){
    // output data of each row
    while($row = $result -> fetch_assoc()){
            echo '<div class="table-row">';
              echo '<div class = "table-data">';
              /*echo  '<div>'.$row['M_Meter'] . "% " . '</div>';
              echo  '<div>'.$row['T_Meter'] . "°C " . '</div>';
              echo  '<div>'.$row['W_Meter'] ."L " . '</div>';
              echo  '<div>'.$row['WF_Meter'] . "L/min " . '</div>';*/
              echo  '<div>'.$row['W_Vermi'] . "kg " . '</div>';
              echo  '<div>'.$row['Reading_Time'] . '</div>';
              echo '</div>';
            echo '</div>';
    }
  }
        echo '</div>';
      echo '</div>';
    echo '</div>';


    mysqli_close($conn);
?>
    <br>
    <br>
    <div class="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/linegraph.js"></script>

    <br>
    <br>
	</body>
</html>
