<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Forget form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <link rel="stylesheet" href="css/forget.css">

  <link href="css/font-awesome.css" rel="stylesheet"><link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>

<div class="container-fluid">
  <div class="login" style="width:400px">
  <h2>Forgot Password ?</h2>
  <form action="post" action="candidate_forgotpass_handler.php">
  <fieldset>
<!--   <i class="fa fa-user" aria-hidden="true"></i>-->
      <h5 class="headings">Email:</h5>
      <i class="fa fa-user" aria-hidden="true"> <input type="email" placeholder="Email"  required /></i>
      <h5 class="headings">Enrollment ID:</h5>
      <i class="fa fa-user" aria-hidden="true"> <input type="text" placeholder="Enrollment Id"  required /></i>

  </fieldset>
  <!-- //script ends here -->

  <input type="submit" value="Submit" />
</form>
</div>

</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
