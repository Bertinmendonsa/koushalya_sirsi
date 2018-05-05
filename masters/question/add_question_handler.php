<?php
require('../dbconnect.php');




$option = array();
$option = $_POST['option'];
$question = $_POST['question'];
$question = strip_tags($question);
echo $question."<br>";

// add question query
$addQuestionQuery = 'INSERT INTO `kk_questions`(`question`) VALUES ("'.$question.'")';
echo $addQuestionQuery;
mysqli_query($conn,$addQuestionQuery);
$question_Id = mysqli_insert_id($conn);







foreach ($option as $opt) {
  echo $opt["'answer'"]."  ".$opt["'status'"]."<br/>";

$quest_option_entry = 'INSERT INTO `kk_question_options`(`question_option`, `question_id`, `option_status`)
 VALUES ("'.$opt["'answer'"].'","'.$question_Id.'","'.$opt["'status'"].'")';
if(mysqli_query($conn,$quest_option_entry)){
  echo "<br>success";
}
else{
  echo "<br>failure<br>".mysqli_error($conn);

}


 echo $quest_option_entry;

}

// fetch correct option id for this question id
$correct_Option_Id = "SELECT `question_options_id` FROM `kk_question_options` WHERE  `question_id`=$question_Id && `option_status`='1'";
$correct_option_exe = mysqli_query($conn,$correct_Option_Id);
while($correct_Option_row = mysqli_fetch_array($correct_option_exe)){
  $correct_option_id = $correct_Option_row['question_options_id'];
}
echo $correct_option_id;

// update correct option id to question table

$update_correct_option_id = "UPDATE `kk_questions` SET `correct_option_id`='$correct_option_id' WHERE `question_id`='$question_Id'";
if(mysqli_query($conn,$update_correct_option_id)){
  echo "<br>correct option update success<br>";
}
else{
  echo "<br>correct option update failure<br>";
}

header("Location: ../question-list1.php");
 ?>
