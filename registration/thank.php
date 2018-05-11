<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PMKVY</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
<link href="css/thank.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
    <div class="jumbotron bo" style="box-shadow: 2px 2px 4px #000000;">
        <div class="card-base">
            <div class="card-icon">
                <a href="#" id="widgetCardIcon" class="imagecard"><i class="fa fa-check" aria-hidden="true"></i></a>
                <div class="card-data widgetCardData">
                    <h2 class="box-title" style="color: green;">Success</h2>
                </div>
            </div>
        </div>

        <h3 class="type"><a class="typewrite" data-period="2000" data-type='[ "Thank You for Registering with us."]'></a></h3>

<?php
include 'src/Instamojo.php';

$api = new Instamojo\Instamojo('test_272820f7f2d28a15cfc9d2e4072', 'test_28651f46b5d7c6577999450a55b', 'https://test.instamojo.com/api/1.1/');

$pay_id = $_GET['payment_request_id'];

try{
  $response = $api->paymentRequestStatus($pay_id);
  $trans_id = $response['payments'][0]['payment_id'];
 ?>

        <p style="text-align:center">Payment Id :<?php echo $response['payments'][0]['payment_id']; ?><br>
          Your Name :<?php echo $response['payments'][0]['buyer_name']; ?><br/>
          Your Email Id: <?php echo $response['payments'][0]['buyer_email'];?><br>
          session details : <?php echo $_SESSION['candidate_email']; ?>
        </p>

<?php
}
catch(Exception $e){
  print("Error".$e->getMessage());
}

 ?>


        <p class="types">User ID and Password will be sent to your Registered Mobile number.Please Check It.</p>
        <p class="ty">The List of Documents must bring on the day of Test are as follows:</p>
        <ul>
        <li>Aadhar Card</li>
        <li>3 Passport Photos</li>
        <li>PAN Card</li>
        <li>Educational Certificate</li>
        </ul>
    </div>
    </div>
</div>

<script src="js/thank.js"></script>
</body>
</html>


<!-- update transaction details to cndidate table -->
<?php
$candidate_id = $_SESSION['candidate_table_id'];

require('dbconnect.php');

// transaction update query
$update_query = "UPDATE `kk_candidates` SET `payment_status`='1',`payment_transaction_id`='$trans_id' WHERE `candidate_id`=$candidate_id";

// echo $update_query;123456

mysqli_query($conn,$update_query);
?>
