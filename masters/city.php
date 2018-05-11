<?php
session_start();
if($_SESSION['Admin_role'] =="" || $_SESSION['Admin_admin_id']=="")
{
  header('Location: login_dashboard.php');
}
else{


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>PMKVY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
        <link href="css/city.css" rel="stylesheet">
     <link href="css/header.css" rel="stylesheet">



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
<!--<img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>-->
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





        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
          <?php
      require('left-menu.php');
      ?>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
<!--
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
-->
        <h4>Add City</h4>
           <button class="btn btn-info refresh" onclick="myFunction()"><span class="glyphicon glyphicon-refresh alignrefresh"></span></button>

    </ul>
</div>


            <!-- qualifivcation form-->
            <div class="container">
<!--  <h2>Vertical (basic) form</h2>-->
  <form method="POST" action="master_entry/city_add.php">


    <div class="form-group">
      <label for="city">City:</label>
      <input type="text" class="form-control city" id="city" placeholder="Enter Your City" name="city">
    </div>



    <button type="submit" class="sub6">Submit</button>
       <button type="Reset" class="can6">Cancel</button>
  </form>
</div>

            <!-- end-->



</div>
 </div>
</div>
    <div class="footer">
  <p class="alignn">MAHAT INNOVATIONS</p>
</div>





    <script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "grid") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "grid";
    }
  });
}</script>
     <!-- script for refresh button-->
    <script>
function myFunction() {
    location.reload();
}
</script>
</body>
</html>
<?php } ?>
