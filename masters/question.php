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
    <link href="css/question.css" rel="stylesheet">
     <link href="css/header.css" rel="stylesheet">

    <!-- jQuery -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
     <?php require('left-menu.php'); ?>
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
        <h4>Add Question</h4>
         <a href="#" class="btn btn-info refresh">
          <span class="glyphicon glyphicon-refresh alignrefresh"></span>
        </a>
    </ul>
</div>


            <!-- question form-->
            <div class="container">

  <form action="question/add_question_handler.php" method="post">
    <div class="form-group">

         <!-- <label for="exam">Exam Name:</label>
      <select class="form-control drop" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select> -->
         <label for="question">Please enter Question </label>

          <div class="autogrow">

                    <div>
                        <div class="form-group">
                            <textarea class="form-control autogrow" rows="3" name="question" placeholder="Type here.."></textarea>
                        </div>
                    </div>

         </div>

         <label for="question">Enter Choices </label>
        <br>
        <?php
        $option=array();



        ?>
            <label for="option">Options:</label>
        <div class="row">
            <div class="col-md-2">
                <input type="text" class="form-control option" id="option1" placeholder="Option 1" name="option[0]['answer']" required>
                  <input type="text" class="form-control option" id="status1" placeholder="Option 1" value="0" name="option[0]['status']" required  style="display:none">
              </div>
                 <div class="col-md-2">
                     <input type="text" class="form-control option" id="option2" placeholder="Option 2" name="option[1]['answer']" required>
                     <input type="text" class="form-control option" id="status2" value="0" placeholder="Option 2" name="option[1]['status']"  required  style="display:none">
                   </div>
                      <div class="col-md-2">
                          <input type="text" class="form-control option" id="option3" placeholder="Option 3" name="option[2]['answer']" required>
                          <input type="text" class="form-control option" id="status3" value="0" placeholder="Option 3" name="option[2]['status']" required  style="display:none">
                        </div>
                           <div class="col-md-2">
        <input type="text" class="form-control option" id="option4" placeholder="Option 4" name="option[3]['answer']" required>
        <input type="text" class="form-control option" id="status4" value="0" placeholder="Option 4" name="option[3]['status']"  required  style="display:none">
       </div> </div>
       <br/>
       <br/>
       <div class="row">
       <div class="col-md-2 col-md-offset-1">
         <label>
           Option 1
            <input type="radio"  name="opt" id="opt1" required>
         </label>
        </div>
                 <div class="col-md-2">
                   <label>
                     Option 2
                    <input type="radio" name="opt" id="opt2">
                   </label>
                  </div>

                      <div class="col-md-2">
                        <label>
                          Option 3
                          <input type="radio" name="opt" id="opt3">
                        </label>
                    </div>
                           <div class="col-md-2">
                             <label>
                               Option 4
                               <input type="radio" name="opt" id="opt4">
                             </label>
                         </div>
   </div>
      </div>
      <button type="submit" class="sub11"><i class="fa fa-plus" ></i>  Add</button>
        <button type="Reset" class="can11"><i class="fa fa-search" ></i>  View </button>
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


<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>


<script>
// script to change option status
$(document).ready(function(){
 $("#opt1").click(function(){
   $("#status1").val('1');
   $("#status2").val('0');
   $("#status3").val('0');
   $("#status4").val('0');
 });
 // option2 selected
 $("#opt2").click(function(){
   $("#status1").val('0');
   $("#status2").val('1');
   $("#status3").val('0');
   $("#status4").val('0');
 });
// option3 selected
$("#opt3").click(function(){
  $("#status1").val('0');
  $("#status2").val('0');
  $("#status3").val('1');
  $("#status4").val('0');
});
// option 4 selected
$("#opt4").click(function(){
  $("#status1").val('0');
  $("#status2").val('0');
  $("#status3").val('0');
  $("#status4").val('1');
});
});


</script>

</body>
</html>
