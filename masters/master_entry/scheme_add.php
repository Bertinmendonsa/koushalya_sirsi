<?php
require('../dbconnect.php');

$scheme = ucwords($_POST["scheme"]);

$Scheme_Entry = "INSERT INTO `kk_schemes` (`scheme`) VALUES ('$scheme')";
mysqli_query($conn,$Scheme_Entry);
header('Location: ../scheme.html');

echo $Scheme_Entry."<br>";
?>
