<?php
//require "includes/common.php";
if(isset($_SESSION['email'])){
    header('location:applicantdetails.php');
}
else if(isset($_SESSION['e_mail'])){
    header('location:adminessential.php');

}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <title>Laptop Issue System</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
         <script tpe="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
           include 'includes/header.php';
        ?>
        <div id="banner_image">
                <div class="container">
                    <center>
                    <div id="banner_content">
                        <h1>Issuing Laptop</h1>

                        <a href="signup.php" target="_blank" class="btn btn-danger btn-lg active">Issue</a>
                    </div>
                    </center>
                </div>

                    </div>
             <?php
            include 'includes/footer.php';
            ?>
    </body>
</html>
