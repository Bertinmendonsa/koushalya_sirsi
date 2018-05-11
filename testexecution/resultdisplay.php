<?php

session_start();
unset($_SESSION['admin_id']);
if($_SESSION['candidate_id']==""){
    header("Location: login.php");
}
else{

?>

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
<!--    <link href="css/question.css" rel="stylesheet">-->
     <link href="css/header.css" rel="stylesheet">
    <link href="css/resultdisplay.css" rel="stylesheet">


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
            <!-- question form-->
            <div class="container">

    <div class="panel panel-default">
    <div class="panel-heading panelcolor">Result</div>
        <div class="row">
        <img src="img/paper-icon.gif" class="animateimage">
        <div class="col-md-6">
         <br>
            <div id="#myDiv">
              <div class=" box1">Total Maximum Marks: <?php echo "<b>".$_SESSION['test_max_marks']."</b>"; ?></div><br>
            <div class="box2">Total Marks obtained: <?php echo "<b>".$_SESSION['test_result']."</b>"; ?></div><br>
             <!-- <div class="box3">Number of Unanswered Questions:</div> -->
            </div>
        </div>

    </div>
    </div>


     <button type="submit" class="sub15"><i class="fa fa-sign-out"> Logout</i></button>
 </div>
 <div class="foot">
  <p class="alignn">MAHAT INNOVATIONS</p>
</div>





</body>
</html>
<?php } ?>
