<?php
session_start();
 ?>
<!DOCTYPE HTML>
<html>

<head>
	<title>PMKVY</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Modal login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">

	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/login_dashboard.css" rel="stylesheet">
	<!--fonts-->
	<!-- title -->
	<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1>Login</h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="admin_login_auth.php" method="post">
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Username :</label>
				<input type="text" name="user_name" placeholder=" " required />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i> password :</label>
				<input type="password" name="password" placeholder=" " required id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>

				<div class="form-end">
					<input type="submit" name="submit" value="Login">
				</div>
            <br>
            <br>
            <div class="forgotpa" style="color:deepskyblue;">
            <a href="forgot_dashboard.html">Forgot Password?</a>
            </div>
				<div class="clearfix"></div>
<!--			</div>-->
		</form>
	</div>

<?php

if(isset($_SESSION['Admin_login_err'])){
	$error = $_SESSION['Admin_login_err'];
	?>
<script>
alert('<?php echo $error; ?>');
 </script>
<?php
}
?>

</body>

</html>
<?php
unset($_SESSION['Admin_login_err']);
 ?>
