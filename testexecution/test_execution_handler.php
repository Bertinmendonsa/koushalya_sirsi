<?php
require('dbconnect.php');
$question = array();
$answer = array();
$question = $_POST['question'];
$answer = $_POST['answer'];

// result variable
$result_count = 0;

for($i =1;$i<=count($question);$i++){
  echo $question[$i]." ".$answer[$i]."<br>";

// query to fetch right option id for each question id
$right_option_query = "SELECT `correct_option_id` FROM `kk_questions` WHERE `question_id`=".$question[$i];
echo $right_option_query."<br>";
$right_option_exe = mysqli_query($conn,$right_option_query);
while($right_option_row  = mysqli_fetch_array($right_option_exe)){
  echo $right_option_row['correct_option_id']."<br>";
  $right_option = $right_option_row['correct_option_id'];
  if($right_option == $answer[$i]){
    $result_count++;
  }

}
}
echo $result_count;

 ?>
