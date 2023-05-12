
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Laptop System Issue</title>
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
       <div id="signpage">

                <h1>SIGN UP For ADMIN</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-3">
                        <center>

                                <form method="post" action="admin_script.php">
                                    <div class=" col-md-offset-1">
                                        <div class="form-group">
                                            Name: <input type="text" name="name" placeholder="enter the name" class="form-control col-md-offset-1" required="required" >
                                        </div>
                                        <div class="form-group">
                                        E-mail:<input type="email" name="e_mail" placeholder="enter email" class="form-control col-md-offset-1" required="required" >
                                        </div>
                                        <div class="form-group">
                                        Password:<input type="password" name="password" placeholder="enter password" class="form-control col-md-offset-1" required="required">
                                        </div>
                                        <div class="form-group">

                                         Contact:   <input type="tel" name="contact" placeholder="enter contact no." class="form-control col-md-offset-1" required="required" >
                                        </div>
                                        <div class="form-group">
                                           College: <input type="text" name="college" placeholder="your college name" class="form-control col-md-offset-1" required="required" >
                                        </div>
                                        <div class="form-group">
                                           Course: <input type="text" name="course" placeholder="course name" class="form-control col-md-offset-1" required="required" >
                                        </div>
                                        <div class="form-group">
                                           Address: <input type="text" name="Address" placeholder="enter address of ur residence" class="form-control col-md-offset-1" required="required" >
                                        </div>
                                         <input type="submit" value="submit" class="btn btn-primary">


                                         <div class="panel-footer">
                                             <center>
                                             <p id="reg">Already have an account? <a href="login_admin.php">Login</a></p>
                                             </center>
                                         </div>
                                    </div>
                                </form>
                        </center>
                            </div>
                        </div>
                    </div>


            </div>

        </div>
        <?php
            include 'includes/footer.php';
            ?>
     </body>
</html>
