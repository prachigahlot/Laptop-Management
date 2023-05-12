<?php
require "includes/common.php";
?>
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
  <div id="login">
            <div class="panel panel-primary">
                <div class="panel-header">
                    <h1> LOGIN FOR APPLICANT</h1>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4">
                                <form method="post" action="login_submit_applicant.php">
                                    <div class="form-group">
                                        E-mail:<input type="email" name="email"  placeholder="enter the email id" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        Password:<input type="password" name="password" placeholder="enter password" class="form-control" required>
                                    </div>

                                            <input type="submit" value="submit" class="btn btn-primary">
                                          </form>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <center>
                    <p id="reg">Don't have an account? <a href="applicant.php">Register</a></p>
                    </center>
                </div>
            </div>

        </div>
          <?php
            include 'includes/footer.php';
            ?>
     </body>
</html>
