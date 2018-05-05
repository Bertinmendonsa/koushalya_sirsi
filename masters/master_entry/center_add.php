<?php
require('../dbconnect.php');

$center_name = ucwords($_POST["center_name"]);

$Center_Entry = "INSERT INTO `kk_registration_center` (`center_name`) VALUES ('$center_name')";
mysqli_query($conn,$Center_Entry);
header('Location: ../center.html');

echo $Center_Entry."<br>";
?>
