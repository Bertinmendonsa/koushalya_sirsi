<?php
session_start();
unset($_SESSION['admin_id']);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
        <link href="css/question_list.css" rel="stylesheet">
     <link href="css/header.css" rel="stylesheet">
<!--    <link href="css/modal.css" rel="stylesheet">-->
    <link href="css/testprocess.css" rel="stylesheet">



    <!-- jQuery -->


    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
    <div class="navbar-inner" style="background-color:darkslategray;">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <span>Koushalya kendra</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->

            <!-- theme selector ends -->



        </div>
    </div>


    <!-- topbar ends -->

<!--    <div class="container">-->
        <h3 class="testheads">Test</h3>
      <br><br>
<img src="img/paper-icon.gif" class="animateimagee">
<div class="progress" style="color:red;">
<div id="myBar" class="w3-container w3-green" style="width:0%">0%</div>
  </div>
     <h4 class="testlines">Thank You for Attending Test</h4>
    <h4 class="testlines">You have successfully submitted test</h4>
<br>
<!--<button class="w3-button w3-green" onclick="move()">Click Me</button> -->


<!-- </div>-->
<a href="resultdisplay.php">
    <button type="submit" class="sub14"><i class="fa fa-search"> View Result</i></button>
</a>
  <div style="margin-top:80px;"></div>
<!-- footer strats here-->
<div class="footer">

        <div class="footerr">
            <p>Copyright</p>
    </div>


</div>

    <script>

  var elem = document.getElementById("myBar");
  var width = 0;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
      elem.innerHTML = width * 1  + '%';
    }

}
</script>
<!-- script for timer-->

    </body>
</html>
