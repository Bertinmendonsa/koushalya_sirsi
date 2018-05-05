<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/login.css">

  <link href="css/font-awesome.css" rel="stylesheet"><link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>

  <div class="login">
      <img src="images/1.jpg">
  <h2>Log In</h2>
  <fieldset>
<!--   <i class="fa fa-user" aria-hidden="true"></i>-->
   <h5 class="headings" style="color:white">Email:</h5>
      <input type="email" placeholder="Email" required="" />
      <h5 class="headings" style="color:white">Password:</h5>
  	<input type="password" placeholder="Password" required=""  />
  </fieldset>
<!--
      <div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
			</div>
-->
			<!-- script for show password -->
<!--
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
-->
      
      <!-- //script ends here -->
			<div class="w3ls-bot">
				<div class="switch-agileits">
					<label class="switch">
						<input type="checkbox">
						<span class="slider round"></span>
						Keep me signed in
					</label>
				</div>
				
			</div>
  <input type="submit" value="Log In" />
  <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="#">Sign Up &rarr;</a>
  </div>
</div>
  
  

</body>

</html>
