<?Php
    error_reporting(E_ALL ^ E_NOTICE);
    ?>
<?php

session_start();
require('dbconnect.php');
$question = array();
$answer = array();
$question = $_POST['question'];
$answer = $_POST['answer'];

// result variable
$result_count = 0;

// create table for candidates
$candidate_table = $_SESSION['candidate_table_primary_id'].date('ymdhi');

$create_Table = "CREATE TABLE candidate_$candidate_table(id int(10) NOT NULL auto_increment,question_id int(10),answer_id int(10),primary key(id), FOREIGN KEY(question_id) REFERENCES kk_questions(question_id),FOREIGN KEY(answer_id) REFERENCES kk_question_options(question_options_id))";

mysqli_query($conn,$create_Table);

echo $create_Table;
for($i =1;$i<=count($question);$i++){
  echo $question[$i]." ".$answer[$i]."<br>";


// insert into each candidate test details table

$can_test_details = "INSERT INTO `candidate_$candidate_table`(`question_id`, `answer_id`)
VALUES ('$question[$i]','$answer[$i]')";


echo "<br>".$can_test_details."<br>";

mysqli_query($conn,$can_test_details);

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
echo "<br>".count($question);
$_SESSION['test_max_marks'] = count($question);
$_SESSION['test_result'] = $result_count;

$date = date('Y-m-d H:i:s');
$max_score = count($question);
// insert result into result table
$candidate_id = $_SESSION['candidate_table_primary_id'];
$result_insert_query = "INSERT INTO `kk_results`(`candidate_id`, `Maximum_score`, `obtained_marks`, `test_table_name`, `date_time`)
 VALUES ('$candidate_id','$max_score','$result_count','candidate_$candidate_table','$date')";
 echo $result_insert_query;

mysqli_query($conn,$result_insert_query);

header('Location: testprocess.php');
 ?>
