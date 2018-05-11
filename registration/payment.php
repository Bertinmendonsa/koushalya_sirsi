<?php
session_start();

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

   <hr/>

   <form method="post" action="pay.php">
     <div class="row first">
       <div class="col-md-6 col-md-offset-3">
         <div class="form-inline">
           <label>CANDIDATE NAME</label>
           <input name="candidate_name" value="<?php echo $_SESSION['candidate_name']; ?>" class="form-control inp" required/>
         </div>
         <div class="form-inline">
           <label>PHONE NUMBER</label>
           <input name="candidate_phone" value="<?php echo $_SESSION['candidate_mobile']; ?>" class="form-control inp" required/>
         </div>
         <div class="form-inline">
           <label>Email Id</label>
           <input name="candidate_email" value="<?php echo $_SESSION['candidate_email']; ?>" class="form-control inp" required/>
         </div>

         <div class="form-inline" hidden>
           <label>Payment reason</label>
           <input name="payment_reason" value="Registration Fees" class="form-control inp" required readonly/>
         </div>
         <div class="form-inline" hidden>
           <label>Total payment Amount</label>
           <input name="net_amount" value="105" class="form-control inp" required readonly/>
         </div>

         <button class="btn btn-default" type="submit">submit</button>
       </div>
     </div>
   </form>
</div>
</body>
