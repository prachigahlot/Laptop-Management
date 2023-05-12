<?php

function check_if_issued($email)
{
    require "includes/common.php";

  $selectq="SELECT * FROM laptopDB.applicant where email='".$email."'";
    $select_result=mysqli_query($con,$selectq)or die(mysqli_error($con));
       $row= mysqli_fetch_array($select_result);
         $user_id=$row['id'];
  $select_query= " SELECT * FROM user_item WHERE applicant_id ='".$user_id."' and status='Added to cart'";
  $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($select_query_result);
    if($total_rows_fetched==1)
    {
        return 1;
    }
    else
    {
        return 0;
    }

}
?>
