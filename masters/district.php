<?php 
	require('dbconnect.php');
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

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    
    <link href="css/district.css" rel="stylesheet">
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

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

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
                       
  <button class="dropdown-btn"> <a class="ajax-link"> <i class="glyphicon glyphicon-home"></i> Masters
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
                        <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Question</span></a>
                        </li>
                        <li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Notice</span></a>
                        </li>
                         <li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> View Result</span></a>
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
<!--
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
-->
        <h4>Add District</h4>
         <a href="#" class="btn btn-info refresh">
          <span class="glyphicon glyphicon-refresh alignrefresh"></span>
        </a>
    </ul>
</div>
            
            
            <!-- qualifivcation form-->
            <div class="container">
<!--  <h2>Vertical (basic) form</h2>-->
  <form method="POST" action="master_entry/district_add.php">
    <div class="form-group">
      <label for="district">District:</label>
      <input type="text" class="form-control district" id="district" placeholder="Enter Your District" 
      name="city_name">
           <label for="state">State:</label>
<!--
        <select class="drop">
            <option value="1">hdshdhsd</option>
            <option value="2">hdshdhsd</option>
          </select>
-->
     
<!--      <label for="sel1">:</label>-->
      <select class="form-control drop" id="sel1" name="state_id">
      	<option>- - - - - Select State - - - - -</option> 160 60
      	<?php 
      	$sqlpname = "SELECT * FROM `kk_states`";
        $resultset = mysqli_query($conn, $sqlpname) or die("database error:". mysqli_error($conn));
        while( $rowscust = mysqli_fetch_assoc($resultset) ) {
        ?>
        <option value="<?php echo $rowscust["state_id"]; ?>"><?php echo $rowscust["state_name"] ?>
        </option>
         <?php } ?>
      </select>
    
      </div>

    <button type="submit" class="sub5">Submit</button>
        <button type="Reset" class="can5">Cancel</button>
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
