<?php

require "includes/common.php";
$item=filter_input(INPUT_POST, 'radios');

$email_id=filter_input(INPUT_POST, 'email');
$select_query="SELECT * FROM laptopDB.applicant where email='".$email_id."'";
              $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
              $total_rows_fetched= mysqli_num_rows($select_query_result);
            if($total_rows_fetched==0)
            {
                echo"Enter valid email id ";
                header("location:login_applicant.php");
            }
            else{
               $row= mysqli_fetch_array($select_query_result);
               $idd=$row['id'];
               $select="SELECT * FROM laptops where brand='".$item."'";
              $select_result=mysqli_query($con,$select)or die(mysqli_error($con));
              $r= mysqli_fetch_array($select_result);

              $item_id=$r['laptop_id'];
              echo $item_id;
$user_query="INSERT INTO user_item(applicant_id,laptop_id,status) VALUES('".$idd."','".$item_id."','Added to cart')";
  $select__result=mysqli_query($con,$user_query)or die(mysqli_error($con));
header("location:carissue.php");
            }
?>
