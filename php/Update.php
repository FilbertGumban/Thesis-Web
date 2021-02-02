<html>
	  <link rel="stylesheet" href=../css/Homepage.css>

</head>
	<title>Homepage</title>

<body>

<?php
  require 'includes/dbsensors.php';


  $sql = "SELECT * FROM sensorsdata WHERE W_Meter > 0 order by Reading_Time desc";
  $result = $conn->query($sql);
  $deletesql = "DELETE * from sensorsdata WHERE `W_Meter` = 0";
  $deletedata = $conn->query($deletesql);

  if(!$result){
    trigger_error('Invalid query: ' . $conn->error);
  }


  if($result -> num_rows > 0){
    // output data of each row
    while($row = $result -> fetch_assoc()){
            echo '<div class="table-row">';
              echo '<div class = "table-data">';
              echo  '<div>'.$row['M_Meter'] . "% " . '</div>';
              echo  '<div>'.$row['T_Meter'] . "°C " . '</div>';
              echo  '<div>'.$row['W_Meter'] ."L " . '</div>';
              echo  '<div>'.$row['WF_Meter'] . "L/min " . '</div>';
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
