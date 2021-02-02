<?php
require 'includes/dbsensors.php';

$query = sprintf("SELECT * FROM sensorsdata");

$result = $conn->query($query);

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

$result->close();
$conn->close();

print json_encode($data);
