<?php
require('../dbconnect.php');

$religion = ucwords($_POST["religion"]);

$Religion_Entry = "INSERT INTO `kk_religion` (`religion`) VALUES ('$religion')";
mysqli_query($conn,$Religion_Entry);
header('Location: ../religion.html');

echo $Religion_Entry."<br>";
?>
