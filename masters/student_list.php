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
    <link href="css/qualification.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/student_list.css" rel="stylesheet">

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

        <h4>Student List</h4>
            <button class="btn btn-info refresh" onclick="myFunction()"><span class="glyphicon glyphicon-refresh alignrefresh"></span></button>

    </ul>
</div>



      <section>

  <!--for demo wrap-->
<!--  <h1>Fixed Table header</h1>-->

<div style="overflow-x:auto;">
  <table>
    <!-- <table cellpadding="0" cellspacing="0" border="0"> -->
      <thead>
        <tr>
          <th>Sl.num</th>
          <th>Enrollment ID</th>
          <th>Name</th>
          <th>Contact Number</th>
          <th>Email Id</th>
          <th>Qualification</th>
          <th>Scheme</th>
          <th>Details</th>

        </tr>
      </thead>
    <!-- </table> -->
  <!-- </div> -->
  <!-- <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0"> -->
      <tbody>
        <?php
                             require('dbconnect.php');
                             $studentslist ="SELECT KKCN.*,KKSC.scheme,KKEQ.qualification FROM `kk_candidates` AS KKCN
                                              LEFT JOIN `kk_educational_qualification` AS KKEQ ON KKCN.	educational_qualification_id = KKEQ.id
                                              LEFT JOIN `kk_schemes` AS KKSC ON KKSC.scheme_id = KKCN.scheme_id
                                              WHERE active = 1";
                             $exe = mysqli_query($conn,$studentslist);
                                 $x=0;//To show Serial numbers irrespective of Student ID
                             while($row = mysqli_fetch_array($exe)){
                             ?>
                <tr class="custtd">
                  <td><?php
                      echo  ++$x;
                  ?></td>
                  <td><?php echo $row['enrollment_id']; ?></td>
                  <td><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></td>
                  <td><?php echo $row['mobile_number']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['qualification']; ?></td>
                  <td><?php echo $row['scheme']; ?></td>
                    <td><button type="button" class="btn btn-default">View</button></td>

            </tr>
            <?php
          }
          ?>


      </tbody>
    </table>
  </div>

</section>



</div>

</div>
 </div>
  <div class="foot">
  <p class="alignn">MAHAT INNOVATIONS</p>
</div>

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
    <script src="js/student_list.js" type="text/javascript"></script>

    <script type="text/javascript">

      function refresh(){
        window.location.reload();
      }

    </script>
     <!-- script for refresh button-->
    <script>
function myFunction() {
    location.reload();
}
</script>
</body>
</html>
<?php } ?>
