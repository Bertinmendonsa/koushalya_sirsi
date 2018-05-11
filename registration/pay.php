<?php

$candidate_name = $_POST['candidate_name'];
$candidate_phone =  $_POST['candidate_phone'];
$candidate_email = $_POST['candidate_email'];
$payment_reason = $_POST['payment_reason'];
$net_amount = $_POST['net_amount'];

include 'src/Instamojo.php';

$api = new Instamojo\Instamojo('test_272820f7f2d28a15cfc9d2e4072', 'test_28651f46b5d7c6577999450a55b', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $payment_reason,
        "amount" => $net_amount,
        "buyer_name" => $candidate_name,
        "phone" => $candidate_phone,
        "send_email" => true,
        "send_sms"=> true,
        "email" => $candidate_email,
        "redirect_url" => "http://localhost/CES/registration/thank.php"
        // "webhook" => "http://localhost/CES/registration/webhook.php"
        ));
    print_r($response);

    $pay_url = $response['longurl'];

    header("Location: $pay_url");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

 ?>
