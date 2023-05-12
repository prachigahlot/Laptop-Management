
<?php
require "includes/common.php";
$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST, 'password');
md5($password);

$select_query="SELECT * FROM laptopDB.applicant where email='".$email."' and password='".$password."'";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($select_query_result);
if($total_rows_fetched==0)
{
    echo "no user with email and password in the applicant table";
}
 else {
    $row= mysqli_fetch_array($select_query_result);
    $SESSION['email']=$email;
    $SESSION['id']=mysqli_insert_id($con);
    header("location:applicantdetails.php?em=$email");
 }
 ?>
