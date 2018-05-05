<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>PMKVY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    
    <link href="css/scheme.css" rel="stylesheet">
     <link href="css/header.css" rel="stylesheet">

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

            <!-- theme selector starts -->
                        <!-- theme selector ends -->

           
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
        <h4>Add Scheme</h4>
         <a href="#" class="btn btn-info refresh">
          <span class="glyphicon glyphicon-refresh alignrefresh"></span>
        </a>
    </ul>
</div>
            
            
            <!-- qualifivcation form-->
            <div class="container">
<!--  <h2>Vertical (basic) form</h2>-->
  <form method="POST" action="master_entry/scheme_add.php">
    <div class="form-group">
      <label for="scheme">Scheme Type:</label>
      <input type="text" class="form-control scheme" id="scheme" placeholder="Enter Scheme Name" name="scheme">
    </div>

    <button type="submit" class="sub9">Submit</button>
       <button type="Reset" class="can9">Cancel</button>
  </form>
</div>

            <!-- end-->



</div>
 </div>
</div>  <hr>
  <footer class="row" style="background-color:darkslategray;">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright" style="text-align:center;margin-top:190px;color:white;margin-right:90px;">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

<!--
        <p class="col-md-3 col-sm-3 col-xs-12 powered-by " style="text-align:center;margin-top:190px;color:white:margin-left:90px;">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
-->
    </footer>


<!-- external javascript -->


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
</body>
</html>
