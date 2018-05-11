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

    <meta charset="utf-8">
    <title>PMKVY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">

    <link href="css/resultdisp_admin.css" rel="stylesheet">
     <link href="css/header.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>


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
      <?php
      require('left-menu.php');
       ?>
        <!--/span-->
        <!-- left menu ends -->



        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">

        <h4>Students Result List</h4>
            <button class="btn btn-info refresh" onclick="myFunction()"><span class="glyphicon glyphicon-refresh alignrefresh"></span></button>

    </ul>
</div>


            <!-- qualifivcation form-->
            <div class="container">
<!--  <h2>Vertical (basic) form</h2>-->
  <form>
    <div class="form-group">


   <div class="row">

       <div class="col-lg-10 col-sm-10">
    <div class="box">

        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-question"></i> Questions View </h2>


                <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>

            <div class="box-content">

                <input type="text" id="myInput"  onkeyup="myFunction()"  class="form-control searchtab" placeholder="Search for names.." title="Type in a name"><span class="fa fa-search searchtable"></span>
                <hr>

                <table id="myTable" class="questionlisttable" style="width:100%;">
                    <thead class="studentrelistthead">
                        <th>SL.No</th>
                        <th>Student Enrollemnt Id</th>
                        <th>Student Name</th>
                        <th>Maximum Marks</th>
                        <th>Marks Obtained</th>
                        <th>Date & Time</th>


                    </thead>
    	       <tbody class="studentrelisttbody">

              <?php
              require('dbconnect.php');
              $query = "SELECT KKRES.*,KKCAN.first_name,KKCAN.middle_name,KKCAN.last_name,KKCAN.enrollment_id FROM kk_results AS KKRES left JOIN kk_candidates as KKCAN on KKCAN.candidate_id = KKRES.candidate_id ORDER BY KKRES.date_time DESC";
              $queryExe = mysqli_query($conn,$query);
              $slno = 1;
              while($queryRow = mysqli_fetch_array($queryExe)){

               ?>

                    <tr>
                        <td><?php  echo $slno; ?></td>
                        <td><?php echo $queryRow['enrollment_id']; ?></td>
                         <td><?php echo $queryRow['first_name']." ".$queryRow['middle_name']." ".$queryRow['last_name']; ?></td>
                         <td><?php echo $queryRow['Maximum_score']; ?></td>
                         <td><?php echo $queryRow['obtained_marks']; ?></td>
                         <td><?php echo $queryRow['date_time']; ?></td>


                    </tr>

                <?php
                $slno++;
              }
                ?>





             </tbody>
        </table>
    </div>
     </div>

</div>
 </div>
 </div>
      </div>


 </form>
 </div>

    <button type="submit" class="sub16">Close</button>


     <br>
            <br>

 </div>

</div>

<div>
</div>

</div>





<!-- footer strats here-->
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




    <!-- prev button js-->
<!--    <script src="js/question_listprev.js"></script>-->
    <!--for search-->
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "search";
      }
    }
  }
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
