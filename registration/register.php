
<?php require('dbconnect.php')
?>
<?Php
    error_reporting(E_ALL ^ E_NOTICE);
    ?>

<!doctype html>
<html lang="en">
<head>
    <title>PMKVY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">
</head>
<body>

<div class="container nd">
  <img src="../images/skillindia.png" alt="logo" class="imga">
    <img src="../images/NSDC_B_7-8-14.gif" alt="logo" class="imgb">

    <h1 class="d1">PMKVY Registration form</h1>
       <img src="../images/logo.jpg" alt="logo" class="imgc">
   <img src="../images/icalogo.jpg" alt="icalogo" class="imgd">
    <p class="d2">( Note : Fields with <span>*</span> mark are mandatory )</p>
    <br>
<form class="form-inline bord" method="post" action="candidate_reg_handler.php" enctype="multipart/form-data">



    <div class="row first">
    <div class="col-md-4">
         <div class="form-group">
      <label>Select Scheme<span>*</span></label>
      <select class="form-control scheme" name="scheme_Id">
        <?php
        $schemeQuery = "select * from kk_schemes";
        $schemeexe= mysqli_query($conn,$schemeQuery);
        while($schemeRow = mysqli_fetch_array($schemeexe)) {
        ?>
        <option value="<?php echo $schemeRow['scheme_id'] ; ?>" ><?php echo $schemeRow['scheme'] ; ?></option>
      <?php
        }
         ?>

      </select>
        </div>
        </div>
        <div class="col-md-4 firsts">
         <div class="form-group">
      <label>Qualification<span>*</span></label>
      <select class="form-control" name="qualification">
        <?php
        $qualificationQuery = "select * from `kk_educational_qualification`";
        $qualificationexe= mysqli_query($conn,$qualificationQuery);
        while($qualificationRow = mysqli_fetch_array($qualificationexe)) {
        ?>
          <option value="<?php echo $qualificationRow['id']; ?>"><?php echo $qualificationRow['qualification']; ?></option>
        <?php } ?>
      </select>
        </div>
        </div>
        <div class="col-md-4 ">
         <div class="form-group firstt">
      <label>Role<span>*</span></label>
      <select class="form-control role" name="role_Id">
        <?php
        $roleQuery = "SELECT * FROM `kk_job_role`";
        $roleExe = mysqli_query($conn,$roleQuery);
        while($roleRow = mysqli_fetch_array($roleExe)){
          ?>
          <option value="<?php echo $roleRow['job_role_id'];?>"><?php echo $roleRow['Job_role'];?></option>
          <?php
        }
         ?>
      </select>
        </div>
        </div>

    </div>


    <div class="row">
    <div class="col-md-6">
         <div class="form-group">
           <?php
           $enrollId = "CES". date('ymdhis');
           ?>
        <label>Enrollment Id<span>*</span></label>
        <input type="text"  class="form-control serial" value="<?php echo $enrollId; ?>" name="serial" placeholder="Enrollment ID" readonly>
        </div>
    </div>

    </div>

    <div class="row">
    <div class="col-md-12">
         <div class="form-group">
        <label>Candidate Name<span>*</span></label>
        <input type="text" class="form-control fname" name="fname" placeholder="First Name" required>
        <input type="text" class="form-control mname" name="mname" placeholder="Middle Name">
        <input type="text" class="form-control lname" name="lname" placeholder="Last Name">
    </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
         <div class="form-group">
        <label>Date of Birth<span>*</span></label>
        <input type="date" class="form-control dob"  name="dob" placeholder="Date of Birth" required>
        </div></div>
    <div class="col-md-4 gender">
         <label>Gender<span>*</span></label>
         <div class="form-group gender1">
        <label class="radio-inline"> <input type="radio" name="gender" value="MALE" required>Male</label>
<label class="radio-inline"><input type="radio" name="gender" value="FEMALE">Female</label>
<label class="radio-inline"><input type="radio" name="gender" value="OTHERS">Other</label>
        </div></div>
    <div class="col-md-4">

         <div class="form-group marital">
      <label>Marital Status<span>*</span></label>
      <select class="form-control mari" name="marital_stat">
        <option>Married</option>
          <option>UnMarried</option>
          <option>Widowed</option>
          <option>Divorcee</option>
      </select>



        </div></div>
    </div>
    <div class="row">
    <div class="col-md-12">
         <div class="form-group">
        <label>Father's Name<span>*</span></label>
        <input type="text" class="form-control ffname" name="ffname" placeholder="First Name" required>
        <input type="text" class="form-control fmname" name="fmname" placeholder="Middle Name">
        <input type="text" class="form-control flname" name="flname" placeholder="Last Name">
    </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
         <div class="form-group">
        <label>Mother's Name<span>*</span></label>
        <input type="text" class="form-control mfname" name="mfname" placeholder="First Name" required>
        <input type="text" class="form-control mmname" name="mmname" placeholder="Middle Name">
        <input type="text" class="form-control mlname" name="mlname" placeholder="Last Name">
    </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
         <div class="form-group">
        <label>Nationality<span>*</span></label>
        <input type="text" class="form-control nation" name="nationality" value="INDIAN" readonly>
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
      <label>Religion<span>*</span></label>
      <select class="form-control religion" name="religion">
        <?php
        $religionQuery = "SELECT * FROM `kk_religion`";
        $religionExe = mysqli_query($conn,$religionQuery);
        while ($religionRow = mysqli_fetch_array($religionExe)) {

          ?>
            <option value="<?php echo $religionRow['id']; ?>"><?php echo $religionRow['religion']; ?></option>
          <?php
        }
         ?>
      </select>
        </div>
        </div>

         <div class="col-md-4">
         <div class="form-group castes">
      <label>Caste Category<span>*</span></label>
      <select class="form-control caste" name="caste">
        <?php
        $casteQuery = "SELECT * FROM `kk_cast_category`";
        $casteExe = mysqli_query($conn,$casteQuery);
        while ($casteRow = mysqli_fetch_array($casteExe)) {
        ?>

          <option value="<?php echo $casteRow['id']; ?>"><?php echo $casteRow['caste_name']; ?></option>

        <?php
        }
         ?>
      </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
         <div class="form-group">
        <label>Aadhar No.<span>*</span></label>
        <input type="text" class="form-control aadhar" name="aadhar" placeholder="Aadhar No." required>
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
        <label>PAN Card No.</label>
        <input type="text" class="form-control pan" name="pan" placeholder="PAN Card No.">
    </div>
        </div>
         <div class="col-md-4">
         <div class="form-group voters">
        <label>Voter ID No.</label>
        <input type="text" class="form-control voter" name="voter" placeholder="Voter ID No.">
    </div>
        </div>
    </div>

     <div class="row">
    <div class="col-md-4">
         <div class="form-group">
        <label>Mobile No.<span>*</span></label>
        <input type="number" class="form-control mobile" name="mobile" placeholder="Mobile No." required>
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
        <label>Landline No.</label>
        <input type="number" class="form-control landline" name="landline" placeholder="Landline No.">
    </div>
        </div>
         <div class="col-md-4">
         <div class="form-group alternates">
        <label>Alternate No.</label>
        <input type="number" class="form-control alternate" name="alternate" placeholder="Alternate No.">
    </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
         <div class="form-group">
        <label>Email ID<span>*</span></label>
        <input type="email" class="form-control email" name="email" placeholder="Email ID" required>
    </div></div>
    </div>

<hr>
    <div class="row">
    <div class="col-md-5">
         <div class="form-group">
        <label>Permanent Address<span>*</span></label>
        <input type="text" class="form-control line1" name="line1" placeholder="Line 1" required>
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
        <input type="text" class="form-control line2" name="line2" placeholder="Line 2">
    </div>
        </div>
        <div class="col-md-3">
         <div class="form-group states">
      <label>State<span>*</span></label>
      <select class="form-control state" name="stateId">
        <option>---  select state first ---</option>
        <?php
        $stateQuery = "SELECT * FROM `kk_states`";
        $stateExe = mysqli_query($conn,$stateQuery);
        while ($stateRow = mysqli_fetch_array($stateExe)) {
        ?>
        <option value="<?php echo $stateRow['state_id']; ?>"><?php echo $stateRow['state_name']; ?></option>
        <?php
        }
         ?>
      </select>
        </div>
        </div>

    </div>


     <div class="row">
        <div class="col-md-4">
         <div class="form-group">
      <label>District<span>*</span></label>
      <select class="form-control district" name="city">

      </select>
        </div>
        </div>


        <div class="col-md-4">
         <div class="form-group">
      <label>City<span>*</span></label>
      <input class="form-control city" type="text" name="town" placeholder="please enter your city" required>
        </div>
        </div>


         <div class="col-md-4">
         <div class="form-group pincodes">
        <label>Pincode</label>
        <input type="number" class="form-control pincode" name="pincode" placeholder="Pincode">
    </div>
        </div>

         </div>

    <div class="row">

     <div class="col-md-6">
         <div class="form-group">
      <label>Parliamentary Constituency<span>*</span></label>
      <select class="form-control parlia" name="parlimentC" required>
        <?php
        $parlimentQuery = "SELECT * FROM `kk_parliment_constituency`";
        $parlimetExe = mysqli_query($conn,$parlimentQuery);
        while ($parlimentRow = mysqli_fetch_array($parlimetExe)) {
          ?>
          <option value="<?php echo $parlimentRow['parliment_constituency_id']; ?>"><?php echo $parlimentRow['parliment_constituency_name']; ?></option>
          <?php
        }
         ?>
      </select>
        </div>
         </div>


    </div>
    <hr>
    <div class="row">
    <div class="col-md-6">
    <label class="checkbox-inline"><input type="checkbox" name="sameAdd" id="sameAdd">Present Address is same as Permanent Address</label>
    </div>

    </div>
    <hr>
    <div class="row">
    <div class="col-md-5">
         <div class="form-group">
        <label>Present Address<span>*</span></label>
        <input type="text" class="form-control pline1" name="pline1" id="pline1" placeholder="Line 1">
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
        <input type="text" class="form-control pline2" name="pline2" id="pline2" placeholder="Line 2">
    </div>
        </div>
        <div class="col-md-3">
         <div class="form-group pstates">
      <label>State<span>*</span></label>
      <select class="form-control pstate" name="preStateId" id="preStateId">
        <option>--- select state first ---</option>
        <?php
        $prestateQuery = "SELECT * FROM `kk_states`";
        $prestateExe = mysqli_query($conn,$prestateQuery);
        while ($prestateRow = mysqli_fetch_array($prestateExe)) {
        ?>
        <option value="<?php echo $prestateRow['state_id']; ?>"><?php echo $prestateRow['state_name']; ?></option>
        <?php
        }
         ?>
      </select>
        </div>
        </div>

    </div>


     <div class="row">

        <div class="col-md-4">
         <div class="form-group">
      <label>District<span>*</span></label>
      <select class="form-control district" name="precity" id="precity">
      </select>
        </div>
        </div>
        <div class="col-md-4">
         <div class="form-group">
      <label>City<span>*</span></label>
      <input class="form-control city" name="pretown" type="text" id="pretown" placeholder="please enter your city">

        </div>
        </div>
          <div class="col-md-4">
         <div class="form-group pincodes">
        <label>Pincode</label>
        <input type="number" class="form-control pincode" name="ppincode" id="ppincode" placeholder="Pincode">
    </div>
         </div></div><div class="row">
         <div class="col-md-6">
             <div class="form-group">
      <label>Parliamentary Constituency<span>*</span></label>
      <select class="form-control parlia" name="preparlimet" id="preparlimet">
        <?php
        $parlimentQuery = "SELECT * FROM `kk_parliment_constituency`";
        $parlimetExe = mysqli_query($conn,$parlimentQuery);
        while ($parlimentRow = mysqli_fetch_array($parlimetExe)) {
          ?>
          <option value="<?php echo $parlimentRow['parliment_constituency_id']; ?>"><?php echo $parlimentRow['parliment_constituency_name']; ?></option>
          <?php
        }
         ?>
      </select>
        </div>



        </div>

    </div>
    <hr>
    <div class="row">
    <div class="col-md-4">
         <div class="form-group">
      <label>Bank Name</label>
      <select class="form-control bank" name="bankId">
        <option>--- select bank first ---</option>
        <?php
        $bankQuery = "SELECT * FROM `kk_bank`";
        $bankExe = mysqli_query($conn,$bankQuery);
        while ($bankRow = mysqli_fetch_array($bankExe)) {
        ?>

        <option value="<?php echo $bankRow['bank_id']; ?>"><?php echo $bankRow['bank_name']; ?></option>

        <?php
        }
         ?>
      </select>
        </div>
        </div>

        <div class="col-md-4">
         <div class="form-group ">
             <label>A/c Holder Name</label>
        <input type="text" class="form-control holder " name="holder_name" placeholder="A/c Holder Name">
    </div>
        </div>

        <div class="col-md-4">
         <div class="form-group branches">
             <label>Branch</label>
        <input type="text" class="form-control branch" name="branch" placeholder="Branch">
    </div>
        </div>


    </div>

    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
             <label>Bank IFSC Code</label>
        <input type="text" class="form-control ifsc" name="ifsc" placeholder="Bank IFSC Code">
    </div>
        </div>
    <div class="col-md-6">
        <div class="form-group acc">
             <label>Aadhar Linked Bank Account No.</label>
        <input type="text" class="form-control account" name="account" placeholder="Bank Account No.">
    </div>
        </div>

    </div>

     <div class="row">
    <div class="col-md-6 are">
             <label>Are You Disabled</label>
      <div class="form-group ares">
        <label class="radio-inline"> <input type="radio" name="disabled"  id="example_0" value="1">Yes</label>
<label class="radio-inline"><input type="radio" name="disabled"  id="example_1" value="0">No</label>

    </div>
        </div>
          <div class="col-md-6">
         <div class="form-group sch">
      <label>Where did you hear about this scheme</label>
      <select class="form-control news" name="news">
        <?php
        $newsQuery = "SELECT * FROM `kk_about_scheme`";
        $newsExe = mysqli_query($conn,$newsQuery);
        while($newsRow = mysqli_fetch_array($newsExe)){
        ?>
            <option value="<?php echo $newsRow['name']; ?>"><?php echo $newsRow['name']; ?></option>
        <?php
        }
        ?>


      </select>
        </div>
        </div>

    </div>

    <div class="row">
    <div class="col-md-6">
        <label>Type of Disability</label>
      <div class="form-group">
       <select class="form-control disab" id="field1" name="disability">
         <?php
         $disQuery = "SELECT * FROM `kk_disablity_type`";
         $disExe = mysqli_query($conn,$disQuery);
         while($disRow = mysqli_fetch_array($disExe)){
         ?>
             <option value="<?php echo $disRow['disablity_type']; ?>"><?php echo $disRow['disablity_type']; ?></option>
         <?php
         }
         ?>


      </select>
    </div>
<!-- 
    <script>
      $(document).ready(function(){
        $("#example_1").click(function(){
            $("#field1").val("NONE");
            console.log($("#field1").val());
        });
      });
    </script> -->
        </div>




          <div class="col-md-6">
         <div class="form-group centre">
      <label>Registration in Centre Name</label>
      <select class="form-control cent" name="regcenter">
      <?php
      $regcenterQuery = "SELECT * FROM `kk_registration_center`";
      $regcenterExe = mysqli_query($conn,$regcenterQuery);
      while($regcenterRow = mysqli_fetch_array($regcenterExe)){
    ?>
            <option value="<?php echo $regcenterRow['registration_center_id'] ; ?>"><?php echo $regcenterRow['center_name'] ; ?></option>
    <?php
      }
      ?>

      </select>
        </div>
        </div>

    </div>

    <div class="row">

         <div class="col-md-6">
         <div class="form-group">
        <label>Sector</label>
        <input type="text" class="form-control sector" name="sector" placeholder="Sector">
    </div>
        </div>
    <div class="col-md-6">
        <div class="form-group counselors">
             <label>Name of the Counselor</label>
        <input type="text" class="form-control counselor" name="counselor" placeholder="Counselor Name">
    </div>
        </div>



    </div>

     <div class="row">

         <div class="col-md-6">

              <div class="form-group">
        <label>Upload Photo</label>
        <input type="file" class="form-control photo" name="image"  id="photo">
    </div>
        </div>
         <div class="col-md-6">
        <div class="form-group aad">
        <label>Upload Aadhar</label>
        <input type="file" class="form-control aadf" name="aadharfile"  id="adhaar">
    </div>
        </div>


    </div>

          <hr/>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <label>Set Your password here<span>*</span></label>
        <input type="password" name="password" class="form-control password" placeholder="please enter your password" required>
      </div>
    </div>


    <div class="row but">
        <div class="col-md-12">
     <button type="submit" name="submit" class="btn btn-primary  btn-md">Submit</button>
    <button type="reset" class="btn btn-danger  btn-md">Cancel</button>
    </div>
    </div>

</form>
</div>
<script src="js/ajax_dep_state.js"></script>
<script>
$(document).ready(function(){

    $("#sameAdd").change(function(){
        if($(this).is(':checked')){
            $("#preparlimet").prop('disabled',true);
            $("#pline1").prop('disabled',true);
            $("#pline2").prop('disabled',true);
            $("#preStateId").prop('disabled',true);
            $("#precity").prop('disabled',true);
            $("#pretown").prop('disabled',true);
            $("#ppincode").prop('disabled',true);

        }
        else{
            $("#preparlimet").prop('disabled',false);
            $("#pline1").prop('disabled',false);
            $("#pline2").prop('disabled',false);
            $("#preStateId").prop('disabled',false);
            $("#precity").prop('disabled',false);
            $("#pretown").prop('disabled',false);
            $("#ppincode").prop('disabled',false);
        }

    });

})

</script>


<!--    disability onclick function-->
    <!-- <script>
   $(function () {
        $("#field1").prop('disabled', true);
        $("#example_0").on("click", function () {
            $("#field1").prop('disabled', false);
        });
        $("#example_1").on("click", function () {
            $("#field1").prop('disabled', true);
        });
    });
    </script> -->
    <!--    disability onclick function ends-->
    <!--  photo size  restrictor-->
    <script>
    var uploadField = document.getElementById("photo");

uploadField.onchange = function() {
    if(this.files[0].size > 500000){
       alert("Photo size should be less that 500KB!");
       this.value = "";
    };
};
</script>
  <!--  photo size  restrictor-->
  <!--  adhaar size  restrictor-->
  <script>
  var uploadField = document.getElementById("adhaar");

uploadField.onchange = function() {
  if(this.files[0].size > 500000){
     alert("file size should be less that 500KB!");
     this.value = "";
  };
};
</script>

    <script>
      $(document).ready(function(){
        $("#example_1").click(function(){
          $("#field1").empty();
            $("#field1").append('<option value="NONE" selected>NONE</option>');
            console.log($("#field1").val());
        });





      });


      $(document).ready(function(){

        $("#example_0").click(function(){
          var id = $("#example_0").val();

          if(id){
            $.ajax({
                url: "ajax-php/disability_list.php",
                dataType: 'Json',
                data: {'id':id},
                success: function(data) {
                  console.log(data);
                    $('#field1').empty();
                    $.each(data, function(key, value) {
                        $('#field1').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });

          }

        });


      });
    </script>

<!--  adhaar size  restrictor-->
</body>
</html>
