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
              <div class="panel panel-primary">
                <div class="panel-header">
                    <h1> Defects</h1>
                </div>
                <div class="panel-body">
                    <p class="text-warning">Problem Request page</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4">
                                <form method="post" action="dedetails.php">
                                    <div class="form-group">
                                        E-mail:<input type="email" name="eail"  placeholder="enter the email id" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Laptop id:<input type="number" name="lid" placeholder="enter laptop id" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Problem:<input type="textarea" name="problem" placeholder="enter the problem" class="form-control">
                                    </div>


                                            <input type="submit" value="submit" class="btn btn-danger"> <br> <br>
                                          </form>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>

 <?php
            include 'includes/footer.php';
            ?>
        </div>
     </body>
</html>
