<?php
require('../dbconnect.php');

$cast_name = ucwords($_POST["cast_name"]);

$Cast_Entry = "INSERT INTO `kk_cast_category` (`cast_name`) VALUES ('$cast_name')";
mysqli_query($conn,$Cast_Entry);
header('Location: ../caste.html');

echo $Cast_Entry."<br>";
?>
