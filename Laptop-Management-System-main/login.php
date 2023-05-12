
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
                      
                <h1>LOGIN</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-3">
                        <center>
                            
                                <form method="post" action="signup_script.php">
                                    <div class=" col-md-offset-4" border="2px">
                                        <p>Please select as You want to Login as Admin or Applicant</p>
                                        <a href="login_admin.php" target="_blank" role="button" class="btn btn-primary btn-block" >Admin</a>
                                       <br><br>
                                          <a href="login_applicant.php" target="_blank" role="button" class="btn btn-primary btn-block" >Applicant</a>
                                       
                                    
                                         
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