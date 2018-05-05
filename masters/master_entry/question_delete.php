<?php
require('../dbconnect.php');
$delId = $_POST["delete"];

echo $delId;

//sales update 
$optionupdate="UPDATE `kk_question_options` SET `active`=0 WHERE question_id='$delId'";
mysqli_query($conn,$optionupdate);

//expense table update 
$questionUpdate="UPDATE `kk_questions` SET `active`=0 WHERE `question_id`='$delId'";
mysqli_query($conn,$questionUpdate);

header('Location: ../question-list1.php');

?>