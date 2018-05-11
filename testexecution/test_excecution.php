<?php
session_start();
// unset($_SESSION['admin_id']);


if($_SESSION['admin_id']==""){
  header("Location: Admin_login.php");
}
else{
  if($_SESSION['candidate_id']==""){
      header("Location: login.php");
  }
  else{
  // echo $_SESSION['candidate_id']." ".$_SESSION['admin_id'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head runat="server">

    <meta charset="utf-8">
    <title>PMKVY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
<!--    <link href="css/question_list.css" rel="stylesheet">-->
     <link href="css/header.css" rel="stylesheet">
<!--    <link href="css/modal.css" rel="stylesheet">-->
    <link href="css/test_excecution.css" rel="stylesheet">



    <!-- jQuery -->
 

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">


<!-- restrict back button -->
<script type="text/javascript">
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
<!-- prevent browser refresh  -->
<script>
document.onkeydown = function(event){
  if(event.keyCode==116 || 82) {
    event.preventDefault();
  }
}
</script>

<script>

function gameLost() {
 
    document.getElementById('autosub').submit();
}
setTimeout(gameLost, 1200000);

</script>

</head>

<!-- <body oncontextmenu="return false"> -->
    <!-- topbar starts -->
    <body>
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

    <div class="container">

        <h4 class="headtest">TEST</h4>
        <h4>Total Questions:30</h4>
        <div class="timers">Time left : <span id="timer"></span></div>
        <br>
        <form method="post"  action="test_execution_handler.php" id="autosub">

          <div class="panel panel-default panelcolr">
            <?php
            require('dbconnect.php');
            $question_list="SELECT * FROM `kk_questions` WHERE `active`='1'";
            $question_paper = mysqli_query($conn,$question_list);
            $serialnum = 1;
            while ($question_paper_row=mysqli_fetch_array($question_paper)) {

       ?>

       <div class="panel-heading"><h5><b><?php echo $serialnum." ".$question_paper_row['question']; ?></b></h5>
         <input type="text" name="question[<?php echo $serialnum; ?>]" value="<?php echo $question_paper_row['question_id']; ?>" style="display:none" readonly>
       </div>
       <div class="panel-body">
       <?php
       $fetch_options_query = "SELECT * FROM `kk_question_options` WHERE `question_id`=".$question_paper_row['question_id'];
       $fetch_options_exe = mysqli_query($conn,$fetch_options_query);
       while($fetch_options_row = mysqli_fetch_array($fetch_options_exe)){

       ?>

       <input type="radio"  name="answer[<?php echo $serialnum; ?>]" required="true" value="<?php echo $fetch_options_row['question_options_id']; ?>"><span class="paragap"><?php echo $fetch_options_row['question_option']; ?></span><br>

       <?php
       }
       ?>
       <div style="display:none">
       <input name="answer[<?php echo $serialnum; ?>]" type="radio"  required="true" value="9" checked/><span class="paragap">NONE</span>
</div>
       </div>



       <?php       # code...
       $serialnum++;
            }

            ?>



        </div>
       <button type="submit" class="sub13">Submit</button>




        </form>

<hr>
        </div>

<!-- footer strats here-->
 <div class="foot">
  <p class="alignn">MAHAT INNOVATIONS</p>
</div>
<!-- script for timer-->
    <script>
document.getElementById('timer').innerHTML =
  20 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}

  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}

    </script>

<!-- <script>
function autosubmit(){
$("#autosub").submit();
}


$(document).ready(function(){
  var myvar = setInterval(autosubmit, 1000);
})

</script> -->


    </body>
</html>

  <?php } } ?>
