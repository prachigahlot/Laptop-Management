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
                <h1> THAT APPLICANT DETAILS HAVE BEEN PERFECTLY DELETED FROM TABLE!!</h1>
                <hr>

            To go back to your details page: <br>
            <a href="login_admin.php?em=$email" name="1" value="add" class="btn btn-block btn-primary">Login</a>




            </div>
            </div>
        </div>


          <?php
            include 'includes/footer.php';
            ?>
     </body>
</html>
