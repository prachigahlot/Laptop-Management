<?php
require "includes/common.php";
$select_query="SELECT * FROM defects";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($select_query_result);
$r=mysqli_fetch_array($select_query_result);
 $eail=filter_input(INPUT_POST, 'eail');
     $select="SELECT * FROM laptopDB.applicant where email='".$eail."'";

              $select_result=mysqli_query($con,$select)or die(mysqli_error($con));
              $total_rows= mysqli_num_rows($select_result);
$row=mysqli_fetch_array($select_result);
$aid=$row['id'];
 $laptop_id=filter_input(INPUT_POST, 'lid');
$pr=filter_input(INPUT_POST, 'problem');

if(($r['id']==$aid)&&$r['problem']==$pr)
{
    echo "error! email already exists with same problem";
}
else
{
    $user_query="insert into defects (applicant_id,laptop_id,problem)values('".$aid."','".$laptop_id."','".$pr."')";

$user_query_submit= mysqli_query($con, $user_query)
or die(mysqli_error($con));
echo "successfulyy inserted";

   header("location:insertt.php");
}
?>                                           
