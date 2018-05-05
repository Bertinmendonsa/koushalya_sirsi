

<?php
include_once("dbconnect.php");
if($_REQUEST['empid']) {
	$sql = "SELECT KKQO.question_option FROM `kk_questions` AS KKQ LEFT JOIN `kk_question_options` AS KKQO ON KKQ.question_id=KKQO.question_id WHERE KKQO.option_status=1 AND 
	KKQ.question_id='".$_REQUEST['empid']."'";


	// SELECT KKQ.*,KKQO.option_status,KKQO.question_option FROM `kk_questions` AS KKQ LEFT JOIN `kk_question_options` AS KKQO ON KKQ.question_id=KKQO.question_id WHERE KKQ.question_id=2 AND KKQO.option_status=1

	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	
	$data = array();
$i=0;
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		$data[$i] = $rows;
        $i++;
	}
	echo json_encode($data);
} else {
	echo 0;	
}
?>