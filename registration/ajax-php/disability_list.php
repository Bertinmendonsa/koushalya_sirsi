<?php

   require('../dbconnect.php');
   $id = $_GET['id'];


   $u_city_q = "SELECT `id`, `disablity_type` FROM `kk_disablity_type` WHERE '$id'" ;

   $exe = mysqli_query($conn,$u_city_q);


   $json = [];
   while($row =mysqli_fetch_array($exe)){
        $json[$row['id']] = $row['disablity_type'];

   }


   echo json_encode($json);
?>
