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
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
    <link href="css/qualification.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/student_list.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>


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
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                                      <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.html"><i class="glyphicon glyphicon-eye-open"></i><span> Dashboard</span></a>
                        </li>
                         <li><a class="ajax-link" href="index.html"><i class="glyphicon glyphicon-home"></i><span> Home</span></a>
                        </li>
                     <li>
                       
  <button class="dropdown-btn"> <a class="ajax-link"> <i class="glyphicon glyphicon-dashboard"></i> Masters
      <i class="fa fa-caret-down"></i></a>
  </button>    
  <div class="dropdown-container">
    <a href="qualification.html">Qualification</a>
    <a href="Role.html">Role</a>
    <a href="scheme.html">Scheme</a>
       <a href="center.html">Center</a>
       <a href="religion.html">Religion</a>
       <a href="caste.html">Caste</a>
       <a href="city.html">City</a>
       <a href="district.html">District</a>
      <a href="state.html">State</a>
      <a href="bank.html">Bank</a>
  </div>
  </li>
          
                        <li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-book"></i><span> Subject</span></a>
                        </li>
                        <li><a class="ajax-link" href="form.html"><i class="glyphicon glyphicon-edit"></i><span> Student</span></a></li>
                        <li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Exams</span></a>
                        </li>
                        <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-question-sign"></i><span> Question</span></a>
                        </li>
                        <li><a class="ajax-link" href="gallery.html"><i class="	glyphicon glyphicon-list-alt"></i><span> Notice</span></a>
                        </li>
                         <li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-pencil"></i><span> Result</span></a>
                        </li>

                        <li><a href="login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
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
         <a class="btn btn-info refreshh" onclick="refresh()">
          <span class="glyphicon glyphicon-refresh alignrefresh"></span>
        </a>
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

        <!-- <tr>
          <td>AAC</td>
          <td>AUSTRALIAN COMPANY </td>
          <td>$1.38</td>
          <td>+2.01</td>
          <td>-0.36%</td>
          <td>AAC</td>
          <td>AUSTRALIAN COMPANY </td>
          <td><button type="button" class="btn btn-default">View</button></td>
        </tr> -->



      </tbody>
    </table>
  </div>

</section>



            <!-- end-->
            </div>
 </div>
  <hr>
  <footer class="row" style="background-color:darkslategray;">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright" style="text-align:center;margin-top:190px;color:white;margin-right:90px;">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>


    </footer>


<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
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
</body>
</html>
