<?php
require "includes/common.php";
$select_query="SELECT email,id FROM laptopDB.admin";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($select_query_result);
 $row= mysqli_fetch_array($select_query_result);
$name= filter_input(INPUT_POST, 'name');
/* @var $email type */
$email=filter_input(INPUT_POST, 'e_mail');
$address=filter_input(INPUT_POST, 'address');
$city=filter_input(INPUT_POST, 'city');
$password=filter_input(INPUT_POST, 'password');
$contact=filter_input(INPUT_POST, 'contact');
if($row['email']==$email)
{
    echo "Error! email already exists";
}
else
{
    $user_query="insert into laptopDB.admin(name,email,address,password,contact,city)values('".$name."','".$email."','".$address."','".$password."','".$contact."','".$city."')" ;

$user_query_submit= mysqli_query($con, $user_query)
or die(mysqli_error($con));
echo "successfulyy inserted";
 $row= mysqli_fetch_array($select_query_result);
    $SESSION['email']=$email;
    $SESSION['id']=mysqli_insert_id($con);
    header("location:login_admin.php");
}
?>                                           
