<?php
require('dbconnect.php');

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
    <link href="register.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="d1">PMKVY Enrollment form</h1>
    <p class="d2">( Note : Fields with <span>*</span> mark are mandatory )</p>
    <br>
<form class="form-inline bord" action="add_candidate_handler.php" method="post">
    <div class="row first">
    <div class="col-md-4">
         <div class="form-group">
      <label>Select Scheme<span>*</span></label>
      <select class="form-control">
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
      <select class="form-control">
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
        <div class="col-md-4 firstt">
         <div class="form-group">
      <label>Role<span>*</span></label>
      <select class="form-control">
        <?php
        $roleQuery = "SELECT * FROM `kk_roles`";
        $roleExe = mysqli_query($conn,$roleQuery);
        while($roleRow = mysqli_fetch_array($roleExe)){
          ?>
          <option value="<?php echo $roleRow['id'];?>"><?php echo $roleRow['role'];?></option>
          <?php
        }
         ?>

      </select>
        </div>
        </div>

    </div>
    <div class="row">
    <div class="col-md-6">
      <?php
      $enrollId = "CES"+date('ymdhis');

      ?>


         <div class="form-group">
        <label>Enrollment Id<span>*</span></label>
        <input type="text"  class="form-control" value="<?php echo $enrollId; ?>" name="serial" placeholder="Enrollment ID" readonly>
        </div>
    </div>
    <div class="col-md-6">
         <!-- <div class="form-group seco">
        <label>Date of Enrollment<span>*</span></label>
        <input type="date" class="form-control second"  name="date" placeholder="Enrollment Date">
    </div> -->
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
         <div class="form-group">
        <label>Candidate Name<span>*</span></label>
        <input type="text" class="form-control" name="fname" placeholder="First Name">
        <input type="text" class="form-control" name="mname" placeholder="Middle Name">
        <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
         <div class="form-group">
        <label>Date of Birth<span>*</span></label>
        <input type="date" class="form-control"  name="dob" placeholder="Date of Birth">
        </div></div>
    <div class="col-md-4">
         <label>Gender<span>*</span></label>
         <div class="form-group">
        <label class="radio-inline"> <input type="radio" name="optradio">Male</label>
<label class="radio-inline"><input type="radio" name="optradio">Female</label>
<label class="radio-inline"><input type="radio" name="optradio">Other</label>
        </div></div>
    <div class="col-md-4">

         <div class="form-group">
      <label>Marital Status<span>*</span></label>
      <select class="form-control">
        <option>Married</option>
          <option>UnMarried</option>
      </select>



        </div></div>
    </div>
    <div class="row">
    <div class="col-md-12">
         <div class="form-group">
        <label>Father's Name<span>*</span></label>
        <input type="text" class="form-control" name="ffname" placeholder="First Name">
        <input type="text" class="form-control" name="fmname" placeholder="Middle Name">
        <input type="text" class="form-control" name="flname" placeholder="Last Name">
    </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
         <div class="form-group">
        <label>Mother's Name<span>*</span></label>
        <input type="text" class="form-control" name="mfname" placeholder="First Name">
        <input type="text" class="form-control" name="mmname" placeholder="Middle Name">
        <input type="text" class="form-control" name="mlname" placeholder="Last Name">
    </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
         <div class="form-group">
        <label>Nationality<span>*</span></label>
        <input type="text" class="form-control" name="nationality" value="INDIAN" readonly>
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
      <label>Religion<span>*</span></label>
      <select class="form-control">
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
         <div class="form-group">
      <label>Caste Category<span>*</span></label>
      <select class="form-control">
        <?php
        $casteQuery = "SELECT * FROM `kk_cast_category`";
        $casteExe = mysqli_query($conn,$casteQuery);
        while ($casteRow = mysqli_fetch_array($casteExe)) {
        ?>

          <option value="<?php echo $casteRow['id']; ?>"><?php echo $casteRow['name']; ?></option>

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
        <input type="text" class="form-control" name="aadhar" placeholder="Aadhar No.">
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
        <label>PAN Card No.</label>
        <input type="text" class="form-control" name="pan" placeholder="PAN Card No.">
    </div>
        </div>
         <div class="col-md-4">
         <div class="form-group">
        <label>Voter ID No.</label>
        <input type="text" class="form-control" name="voter" placeholder="Voter ID No.">
    </div>
        </div>
    </div>

     <div class="row">
    <div class="col-md-4">
         <div class="form-group">
        <label>Mobile No.<span>*</span></label>
        <input type="number" class="form-control" name="mobile" placeholder="Mobile No.">
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
        <label>Landline No.</label>
        <input type="number" class="form-control" name="landline" placeholder="Landline No.">
    </div>
        </div>
         <div class="col-md-4">
         <div class="form-group">
        <label>Alternate No.</label>
        <input type="number" class="form-control" name="alternate" placeholder="Alternate No.">
    </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
         <div class="form-group">
        <label>Email ID<span>*</span></label>
        <input type="email" class="form-control" name="email" placeholder="Email ID">
    </div></div>
    </div>


    <div class="row">
    <div class="col-md-5">
         <div class="form-group">
        <label>Permanent Address<span>*</span></label>
        <input type="text" class="form-control" name="line1" placeholder="Line 1">
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
        <input type="text" class="form-control" name="line2" placeholder="Line 2">
    </div>
        </div>
        <div class="col-md-3">
         <div class="form-group">
      <label>State<span>*</span></label>
      <select class="form-control" name="stateId">
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

        <div class="col-md-3">
         <div class="form-group">
      <label>District<span>*</span></label>
      <select class="form-control" name="city">
      </select>
        </div>
        </div>
        <div class="col-md-2">
         <div class="form-group">
      <label>City<span>*</span></label>
      <input type="text" name="city" class="form-control">
        </div>
        </div>
          <div class="col-md-4">
         <div class="form-group">
      <label>Parliamentary Constituency<span>*</span></label>
      <select class="form-control">
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
         <div class="col-md-3">
         <div class="form-group">
        <label>Pincode</label>
        <input type="number" class="form-control" name="pincode" placeholder="Pincode">
    </div>
        </div>

    </div>
    <div>
    <label class="checkbox-inline"><input type="checkbox" value="">Present Address is same as Permanent Address</label>
    </div><br>
    <div class="row">
    <div class="col-md-5">
         <div class="form-group">
        <label>Present Address<span>*</span></label>
        <input type="text" class="form-control" name="pline1" placeholder="Line 1">
    </div>
        </div>

         <div class="col-md-4">
         <div class="form-group">
        <input type="text" class="form-control" name="pline2" placeholder="Line 2">
    </div>
        </div>
        <div class="col-md-3">
         <div class="form-group">
      <label>State<span>*</span></label>
      <select class="form-control">
        <option>Karnataka</option>
          <option>Other</option>
      </select>
        </div>
        </div>

    </div>


     <div class="row">

        <div class="col-md-3">
         <div class="form-group">
      <label>District<span>*</span></label>
      <select class="form-control">
          <option>Uttara Kannada</option>
        <option>Other</option>
      </select>
        </div>
        </div>
        <div class="col-md-2">
         <div class="form-group">
      <label>City<span>*</span></label>
      <select class="form-control">
        <option>Sirsi</option>
          <option>Other</option>
      </select>
        </div>
        </div>
          <div class="col-md-4">
         <div class="form-group">
      <label>Parliamentary Constituency<span>*</span></label>
      <select class="form-control">
        <option>Sirsi</option>
          <option>Other</option>
      </select>
        </div>
        </div>
         <div class="col-md-3">
         <div class="form-group">
        <label>Pincode</label>
        <input type="number" class="form-control" name="pincode" placeholder="Pincode">
    </div>
        </div>

    </div>
    <div class="row">
    <div class="col-md-6">
         <div class="form-group">
      <label>Bank Name</label>
      <select class="form-control">
        <option>Corporation Bank</option>
          <option>Other</option>
      </select>
        </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
             <label>Branch</label>
        <input type="text" class="form-control" name="branch" placeholder="Branch">
    </div>
        </div>


    </div>

    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
             <label>Aadhar Linked Bank Account No.</label>
        <input type="text" class="form-control" name="account" placeholder="Bank Account No.">
    </div>
        </div>
     <div class="col-md-6">
        <div class="form-group">
             <label>Bank IFSC Code</label>
        <input type="text" class="form-control" name="ifsc" placeholder="Bank IFSC Code">
    </div>
        </div>
    </div>

     <div class="row">
    <div class="col-md-6">
             <label>Type of Disability (if any)</label>
      <div class="form-group">
        <label class="radio-inline"> <input type="radio" name="opradio">Yes</label>
<label class="radio-inline"><input type="radio" name="opradio">No</label>

    </div>
        </div>
          <div class="col-md-6">
         <div class="form-group">
      <label>Where did you hear about this scheme</label>
      <select class="form-control">
        <option>Newspaper</option>
          <option>Koushal mela</option>
           <option>Electronic Media</option>
           <option>Internet</option>
           <option>Friend</option>
           <option>Other</option>
      </select>
        </div>
        </div>

    </div>

    <div class="row">
    <div class="col-md-4">
        <label>Need Hostel Facility</label>
      <div class="form-group">
        <label class="radio-inline"> <input type="radio" name="oradio">Yes</label>
<label class="radio-inline"><input type="radio" name="oradio">No</label>

    </div>
        </div>
          <div class="col-md-4">
         <div class="form-group">
      <label>Registration in Centre Name</label>
      <select class="form-control">
        <option>PMKK UK</option>
         <option>Other</option>
      </select>
        </div>
        </div>
         <div class="col-md-4">
         <div class="form-group">
        <label>Sector</label>
        <input type="text" class="form-control" name="sector" placeholder="Sector">
    </div>
        </div>

    </div>
    <div class="row">

         <div class="col-md-6">

              <div class="form-group">
        <label>Upload Photo</label>
        <input type="file" class="form-control" name="image">
    </div>
        </div>
         <div class="col-md-6">
        <div class="form-group">
        <label>Upload Aadhar</label>
        <input type="file" class="form-control" name="aadharfile">
    </div>
        </div>

    </div>

    <div class="row">
    <div class="col-md-12">
        <div class="form-group">
             <label>Name of the Counselor</label>
        <input type="text" class="form-control" name="counselor" placeholder="Counselor Name">
    </div>
        </div>
    </div>

    <div class="row but">
        <div class="col-md-12">
     <button type="button" class="btn btn-primary  btn-md">Submit</button>
    <button type="button" class="btn btn-danger  btn-md">Cancel</button>
    </div>
    </div>

</form>
</div>
<script src="js/ajax_dep_state.js"></script>
</body>
</html>
