<?php
require('../dbconnect.php');

$bank_name = ucwords($_POST["bank_name"]);

$Bank_Entry = "INSERT INTO `kk_bank`(`bank_name`) VALUES ('$bank_name')";
if(mysqli_query($conn,$Bank_Entry)){
    echo "Success<br>";
    header('Location: ../bank.html');
}
else{
    echo "sorry".mysqli_error($conn);
}


echo $State_Entry."<br>";
?>
