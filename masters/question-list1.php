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
<link href="css/bower_component/responsive-tables.css" rel="stylesheet">
    <link href="css/question_list.css" rel="stylesheet">
     <link href="css/header.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">

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
         <?php require("left-menu.php") ?>
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

        <h4>Questions List</h4>
         <a href="question.php" class="btn btn-info refresh">
          <span class="alignrefresh">ADD QUESTION</span>
        </a>
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
                <h2><i class="fa fa-question"></i> Questions View</h2>

                <div class="box-icon">
<!--
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
-->
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
                    <thead class="questionlistthead">
                        <th>SL.No</th>
                                            <th>Question</th>

                                                <th>Status</th>

                                                <th>Edit</th>
                        <th>Delete</th>

                    </thead>


                    <tbody class="questionlisttbody">
                        <?php
                        require('dbconnect.php');
                        $slNo=1;
                        $salesQuery = "SELECT * FROM `kk_questions` WHERE active=1";
                        $salesExe = mysqli_query($conn,$salesQuery);
                        while($salesRow = mysqli_fetch_array($salesExe)){

                        ?>
                    <tr>
                        <td><?php echo $slNo;  ?></td>
                        <td><?php echo $salesRow["question"];?>
                            <button type="button" class="btn btn-info questiondetail"
                            value="<?php echo $salesRow["question_id"]; ?>" onclick="f1(this)" data-toggle="modal" title="view" data-target="#myModal"><i class="fa fa-eye"></i></button>
                        </td>

                        <td>   <form method="POST" action="master_entry/question_delete.php">
                            <button type="submit" title="Deactivate" data-toggle="tooltip"
                               class="btn btn-warning deactivatebut"><i class="fa fa-ban"></i></button></form></td>
                        <td>
                            <form method="POST" action="master_entry/question_delete.php">
                            <button  type="submit" data-toggle="tooltip"
                                   class="btn btn-warning editbut" name="ssss"><i class="fa fa-edit"></i>
                               </button>
                           </form></td>
                          <td>
                              <a href="#myModald" class="trigger-btn" data-toggle="modal">
                        <button type="button" onclick="deleteModalvalue(<?php echo $salesRow["question_id"];?>)" data-toggle="tooltip" class="btn btn-warning deletebut"  name="delete"><i class="fa fa-trash-o"></i></button></a>
                        </td>

                    </tr>
                    <!-- <tr>
                        <td>2</td>
                        <td>Question Two</td>
                             <td>   <a href="#" title="Deactivate." data-toggle="tooltip"
                               class="btn btn-warning deactivatebut"><i class="fa fa-ban"></i></a></td>
                        <td>    <a href="#" title="Edit" data-toggle="tooltip"
                                   class="btn btn-warning editbut"><i class="fa fa-edit"></i></a>  </td>
                         <td>   <a href="#" title="Delete" data-toggle="tooltip"
                               class="btn btn-warning deletebut"><i class="fa fa-trash-o"></i></a></td>
                    </tr> -->
                     <!-- <tr>
                        <td>3</td>
                         <td>Question Three </td>
                              <td>   <a href="#" title="Deactivate" data-toggle="tooltip"
                               class="btn btn-warning deactivatebut"><i class="fa fa-ban"></i></a></td>
                        <td>    <a href="#" title="Edit" data-toggle="tooltip"
                                   class="btn btn-warning editbut"><i class="fa fa-edit"></i></a>  </td>
                           <td> <a href="#" title="Delete" data-toggle="tooltip"
                               class="btn btn-warning deletebut"><i class="fa fa-trash-o"></i></a></td>
                    </tr> -->
                    <!-- <tr>
                        <td>4</td>
                        <td>Question Four</td>
                            <td>   <a href="#" title="Deactivate" data-toggle="tooltip"
                               class="btn btn-warning deactivatebut"><i class="fa fa-ban"></i></a></td>
                        <td>    <a href="#" title="Edit" data-toggle="tooltip"
                                   class="btn btn-warning editbut"><i class="fa fa-edit"></i></a>  </td>
                       <td>     <a href="#" title="Delete" data-toggle="tooltip"
                               class="btn btn-warning deletebut"><i class="fa fa-trash-o"></i></a></td>
                    </tr> -->


                  <?php
                    $slNo++;
                    }
                  ?>
                    </tbody>
                </table>
            </div>
                    </div>

            </div>
                </div>


     </div>



<!-- Modal HTML -->
<div id="myModald" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Are you sure?</h4>
                <button style="margin-top:-22px;" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records?</p>
			</div>
			<div class="modal-footer">
                <form method="POST" action="master_entry/question_delete.php">
    <button style="margin-right:95px;" type="submit" data-toggle="tooltip" class="btn btn-warning deletebut"
    name="delete" id="deleteModalButton" >Delete
         </button></form>
    <button type="button"  style="margin-top: -60px; margin-right: 14px;" class="btn btn-info"
    onclick="flushValues()" data-dismiss="modal">Cancel</button>


<!--				<button type="button" class="btn btn-danger">Delete</button>-->
			</div>
		</div>
	</div>
</div>





 <!-- end-->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="refreshtable()">&times;</button>
          <h4 class="modal-title">Options</h4>
        </div>
        <div class="modal-body">
           <section>
	<div class="modalstyle">

        <p id="row_11"></p>
	</div>   <br>
	<div  class="modalstyle">

        <p id="row_12"></p>
	</div>   <br>
	<div  class="modalstyle">

        <p id="row_13"></p>
	</div>
                  <br>
	<div  class="modalstyle">

        <p id="row_14"></p>
	</div>
               <br>
	<div  class="modalstyle" style="color:green;">


        <p id="row15"><b></b></p>
	</div>

    </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="closemod" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>




      </div>
  </form>
</div>

            <!-- end-->
<div>
        </div>

</div>
 </div>
</div>

  <div class="foot">
  <p class="alignn">MAHAT INNOVATIONS</p>
</div>



<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="script/question_list.js"></script>


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

<script type="text/javascript">

 function deleteModalvalue(deleteId){
    $('#deleteModalButton').val(deleteId);
}

 function flushValues(){
            $('#deleteModalButton').val("");
     }
</script>


    <script>
          function refreshtable(){
                    for(j = 1;j<6;j++){
                     $("#row_"+j+1).text("");
                     $("#row_"+j+2).text("");
                     $("#row_"+j+3).text("");
                     $("#row_"+j+4).text("");
                     $("#row_"+j+5).text("");
                   }
          }
    </script>



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


</body>
</html>
<?php } ?>
