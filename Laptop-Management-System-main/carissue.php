<?php
require "includes/common.php";
?>                                           
<!DOCTYPE html>
<html>
    <head>
        <title>Applicant Issued</title>
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
             <div id="jum" class="container">
            <div class="jumbotron">
                <h1> YOU HAVE ISSUED THE LAPTOP PERFECTLY!</h1>


                <h3>YOU HAVE TO DO THE PAYMENT IN CASH IN PERSONAL.</h3>




            To go back to your details page:
            <a href="login_applicant.php?em=$email" name="1" value="add" class="btn btn-block btn-primary">Login</a>




            </div>
            </div>
        </div>


          <?php
            include 'includes/footer.php';
            ?>
     </body>
</html>
