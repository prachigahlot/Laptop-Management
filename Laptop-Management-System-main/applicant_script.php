<?php
require "includes/common.php";
$select_query="SELECT * FROM laptopDB.applicant";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($select_query_result);

$name= filter_input(INPUT_POST, 'name');
/* @var $email type */
$email=filter_input(INPUT_POST, 'email');
$address=filter_input(INPUT_POST, 'Address');
$city=filter_input(INPUT_POST, 'city');
$password=filter_input(INPUT_POST, 'password');
$contact=filter_input(INPUT_POST, 'contact');
$course=filter_input(INPUT_POST, 'Course');
$college=filter_input(INPUT_POST, 'college');
 $row= mysqli_fetch_array($select_query_result);
if($row['email']==$email)
{
    echo "Error! email already exists";
}
else
{
    $user_query="insert into laptopDB.applicant(name,email,password,address,city,course,college,contact)values('".$name."','".$email."','".$password."','".$address."','".$city."','".$course."','".$college."','".$contact."')";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$user_query_submit= mysqli_query($con, $user_query)
or die(mysqli_error($con));
echo "successfulyy inserted";
 $row= mysqli_fetch_array($select_query_result);
    $SESSION['email']=$email;
    $SESSION['id']=mysqli_insert_id($con);
    header("location:login_applicant.php");
}
?>                                           
