<?php

$conn = new mysqli('127.0.0.1','root','', 'sensors');
$file = fopen("values.php", "r"); // put file in htdocs then set ("parent folder/txt file")

$smpercent = $_POST['sm_value']; // add a variable for each sensor enclosed in []
$temp = $_POST['temp_value'];
$loadcell = $_POST['lc_value'];
$ultrasonic = $_POST['us_value'];
$waterflow = $_POST['fr_value'];

$fileContent = $smpercent .",". $temp .",". $ultrasonic .",". $waterflow .",". $loadcell ."\n";

$fileStatus = file_put_contents ("values.php", $fileContent, FILE_APPEND);

if($fileStatus != false)
{
	echo "Values Inserted!";
}
else
{
	echo "FAIL: could not write to file";
}

while (!feof($file)) {
  $content = fgets($file);
  $carray = explode(",", $content);
  list($smpercent, $temp, $ultrasonic, $waterflow, $loadcell) = $carray;
  $sql= "INSERT INTO `sensorsdata` (`M_Meter`, `T_Meter`, `W_Meter`, `WF_Meter`, `W_Vermi`) VALUES ('$smpercent', '$temp', '$ultrasonic', '$waterflow', '$loadcell')";
  $conn-> query($sql);
}
$file = fopen("values.php", "a+");
ftruncate($file, 0);
fclose($file);
?>
