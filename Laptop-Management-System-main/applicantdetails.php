<?php
require "includes/common.php";
?>                                           
<!DOCTYPE html>
<html>
    <head>
        <title>Applicant Details</title>
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
            $email=filter_input(INPUT_GET, 'em');






              $select_query="SELECT * FROM laptopDB.applicant where email='".$email."'";
              $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
              $total_rows_fetched= mysqli_num_rows($select_query_result);
               $row= mysqli_fetch_array($select_query_result);?>
                 <div id="jum" class="container">
            <div class="jumbotron">
                <h1>Welcome <?php echo ":<b>".$row['name']."<b>";?></h1>
                  <hr>
                <p>Your Email id is <?php echo ":<b>".$row['email']."<b>";?></p>
                <h3>Details of <?php echo ":<b>".$row['name']."<b>";?></h3>
                <p>Id no is. <?php echo":<b>".$row['id']."<b>";?></p>
                <p>College name is. <?php echo":<b>".$row['college']."<b>";?></p>
                <p>Course name is. <?php echo":<b>".$row['course']."<b>";?></p>
                <p>Contact no is. <?php echo":<b>".$row['contact']."<b>";?></p>
                <p>Address is. <?php echo":<b>".$row['address']."<b>";?></p>
             <?php include 'check_if_issued.php'; ?>


            <div id="appbut">

                 <?php
                 if (check_if_issued($email))
                         {

                        ?>
                    <p>  <a href="#" class="btn btn-block btn-success disabled">Issue</a></p>
                    <?php



                  $id=filter_input(INPUT_GET, 'uid');
                   $select="SELECT * FROM user_item where applicant_id='".$id."'";
              $select_result=mysqli_query($con,$select)or die(mysqli_error($con));
              $total_r_fetched= mysqli_num_rows($select_result);
               $r= mysqli_fetch_array($select_result);

                 ?> <p>Status is: <?php echo":<b>ADDED<b>";?></p>
                    <?php
                    }
                         else
                             {
                             ?>
                    <a href="requirements.php?ema=$email" name="req" value="add" class="btn btn-block btn-primary">Issue</a>
                        <?php }

                             ?>
                    <a href="defect.php" name="de" value="add" class="btn btn-block btn-primary">Defect Request</a>
            </div>



            </div>
            </div>
        </div>


          <?php
            include 'includes/footer.php';
            ?>
     </body>
</html>
