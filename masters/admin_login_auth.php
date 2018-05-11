<?php
session_start();
require('dbconnect.php');
$user_name = $_POST['user_name'];
$password = $_POST['password'];



if(isset($_POST['submit'])){

$error = "Sorry! Admin Username/Password is Incorrecct";
// auth  query
$admin_auth_query = "SELECT `email`,`role_id` FROM `kk_users` WHERE `active`='1' && `email`='$user_name' && `password`='$password'";
// echo "<br>$admin_auth_query";

$admin_auth_exe = mysqli_query($conn,$admin_auth_query);
$admin_auth_row = mysqli_fetch_array($admin_auth_exe);
if(is_array($admin_auth_row)){
  $_SESSION['Admin_role'] = $admin_auth_row['role_id'];
  $_SESSION['Admin_admin_id'] =  $admin_auth_row['email'];

  //header location
  header("Location: index.php");
}
else{
  $_SESSION['Admin_login_err'] = $error;
  header("Location: login_dashboard.php");

}


}

?>
