<?php

$email =$_POST["email1"];
$pwd =$_POST["password1"];

// $email = stripslashes($email);
// // $password = stripslashes($password);

echo "$email <br> $pwd";

session_start();
require('dbconnect.php');

$_SESSION['timestart']=date('Y-m-d H:i:s');
session_regenerate_id(true);

$_SESSION['admin_sid']= session_id();

if(isset($_POST['admin_login'])){

$admin_auth_query = "SELECT `email`,`role_id` FROM `kk_users` WHERE `active`='1' && `email`='$email' && `password`='$pwd'";
  echo "<br>".$admin_auth_query." ".$password;
  $admin_auth_exe = mysqli_query($conn,$admin_auth_query);
  $admin_auth_row = mysqli_fetch_array($admin_auth_exe);
  if(is_array($admin_auth_row)){
    $_SESSION['role'] = $admin_auth_row['role_id'];
    $_SESSION['admin_id'] =  $admin_auth_row['email'];
    header('Location: login.php');

  }
  else{
    header('Location: Admin_login.php');
  }


}




?>
