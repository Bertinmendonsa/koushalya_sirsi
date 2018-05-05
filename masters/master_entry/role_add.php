<?php
require('../dbconnect.php');

$Job_role = ucwords($_POST["Job_role"]);

$Jobrole_Entry = "INSERT INTO `kk_job_role` (`Job_role`) VALUES ('$Job_role')";
mysqli_query($conn,$Jobrole_Entry);
header('Location: ../Role.html');

echo $Jobrole_Entry."<br>";
?>
