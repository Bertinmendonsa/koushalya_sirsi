<?php
require('../dbconnect.php');

$state_name = ucwords($_POST["state_name"]);

$State_Entry = "INSERT INTO `kk_states`(`state_name`) VALUES ('$state_name')";
if(mysqli_query($conn,$State_Entry)){
    echo "Success<br>";
    header('Location: ../state.html');
}
else{
    echo "sorry".mysqli_error($conn);
}


echo $State_Entry."<br>";
?>
