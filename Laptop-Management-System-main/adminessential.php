<?php
require "includes/common.php";
?>                                           
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
     <body>
        <div>
           <?php
           include 'includes/header.php';
           ?>
            <?php


              $email=filter_input(INPUT_POST, 'em');


              $select_query="SELECT * FROM laptopDB.admin where email='".$email."'";
              $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
              $total_rows_fetched= mysqli_num_rows($select_query_result);
               $row= mysqli_fetch_array($select_query_result);
               ?>
                 <div id="jum" class="container">
            <div class="jumbotron">

                <p>The Email id is <?php echo "<br><b>".$row['email']."<b>" ;?></p>
                <h3>Details of  applicant named: <?php echo "<br><b>".$row['name']."<b>";?></h3>
                  <hr>
                <p>Id no is. <?php echo"<br><b>".$row['id']."<b>";?></p>
                <p>College name is. <?php echo"<br><b>".$row['college']."<b>";?></p>
                <p>Course name is. <?php echo"<br><b>".$row['course']."<b>";?></p>
                <p>Contact no is. <?php echo"<br><b>".$row['contact']."<b>";?></p>
                <p>Address is. <?php echo"<br><b>".$row['address']."<b>";?></p>
            </div>

            <h5>All Applicants Defects: <a href="allappde.php">Defects</a> </h5> <br>
            <h5>All Defects: <a href="alldefe.php">All Defects</a> </h5>
        </div>
              <?php
            include 'includes/footer.php';
            ?>
     </body>
</html>
