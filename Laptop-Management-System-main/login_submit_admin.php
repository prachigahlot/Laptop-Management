<?php
require "includes/common.php";
$email=filter_input(INPUT_POST, 'e_mail');
$password=filter_input(INPUT_POST, 'password');
md5($password);

$select_query="SELECT email,id FROM laptopDB.admin Where email='".$email."' and password='".$password."' ";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($select_query_result);
if($total_rows_fetched==0)
{
    echo "no user with email and password in the admin table";
}
 else {
    $row= mysqli_fetch_array($select_query_result);
    $SESSION['e_mail']=$email;
    $SESSION['id']=mysqli_insert_id($con);
    header("location:adminessential.php?em=$email");
}
?>                                           
