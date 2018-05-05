<?php
require('../dbconnect.php');

$city_name = ucwords($_POST["city_name"]);
$state_id = $_POST["state_id"];

$District_Entry = "INSERT INTO `kk_districts` (`city_name`,`state_id`) VALUES ('$city_name','$state_id')";
mysqli_query($conn,$District_Entry);
header('Location: ../district.php');

echo $District_Entry."<br>";
?>
