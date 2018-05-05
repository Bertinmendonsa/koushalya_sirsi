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
  <form method="post" action="candidate_login.php">
  <fieldset>
<!--   <i class="fa fa-user" aria-hidden="true"></i>-->
   <h5 class="headings" style="color:white">Email:</h5>
      <input type="email" name="emailId" placeholder="Email" required="" />
      <h5 class="headings" style="color:white">Password:</h5>
  	<input type="password" name="user_password" placeholder="Password" required=""  />
  </fieldset>

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
  <!-- <input type="submit" value="Log In" /> -->
  <button type="submit" name="candidate_login" class="btn btn-default btn-submit">Login</button>
</form>
  <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="#">Sign Up &rarr;</a>
  </div>
</div>



</body>

</html>
