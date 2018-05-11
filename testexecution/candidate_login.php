<?php
$emailId = $_POST['emailId'];
$user_password = $_POST['user_password'];

$emailId = stripslashes($emailId);
$user_password = stripslashes($user_password);

$user_password = sha1($user_password);

echo "$emailId <br> $user_password";

session_start();
require('dbconnect.php');
// $_SESSION['timestart']=date('Y-m-d H:i:s');
session_regenerate_id(true);

$error_msg = "Candiate Username/Password is Incorrect";


$_SESSION['candidate_sid']= session_id();

if(isset($_POST['candidate_login'])){

$candidate_auth_query = "SELECT `candidate_id`,`email`, `password` FROM `kk_candidates` WHERE `active` = '1' && `email`='$emailId' && `password`='$user_password'";

  $candidate_auth_exe = mysqli_query($conn,$candidate_auth_query);
  $candidate_auth_row = mysqli_fetch_array($candidate_auth_exe);
  if(is_array($candidate_auth_row)){
    $_SESSION['candidate_id'] =  $candidate_auth_row['email'];
    $_SESSION['candidate_table_primary_id'] = $candidate_auth_row['candidate_id'];
    header('Location: inst.html');
  }
  else{
    $_SESSION['candidate_error'] = $error_msg;
    header('Location: login.php');

  }


}


?>
