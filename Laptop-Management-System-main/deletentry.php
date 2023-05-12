<?php
require "includes/common.php";
$email=filter_input(INPUT_POST, 'em');


$select_query="SELECT * FROM laptopDB.applicant where id='".$email."'";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($select_query_result);

    $row= mysqli_fetch_array($select_query_result);
    $aid=$row['id'];
    $q="Delete from defects where applicant_id='".$aid."'";
      $select_q=mysqli_query($con,$q)or die(mysqli_error($con));

    echo "entry deleted having id of : ".$email;
    // header("location:deleted.php");

 ?>
