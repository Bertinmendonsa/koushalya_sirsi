<?php
require('../dbconnect.php');

$qualification = ucwords($_POST["qualification"]);

$Qualification_Entry = "INSERT INTO `kk_educational_qualification` (`qualification`) VALUES ('$qualification')";
mysqli_query($conn,$Qualification_Entry);
header('Location: ../qualification.html');

echo $Qualification_Entry."<br>";
?>
