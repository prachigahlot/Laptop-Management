<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <?php
    require "includes/header.php";
    ?>

    <div class="panel-body">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <form >
                        <div class="form-group">
                          <br> <br>
                          Name: <input type="text" name="name" placeholder="name" class="form-control">
                        </div>
                        <div class="form-group">
                            E-mail:<input type="email" name="e_mail"  placeholder="enter the email id" class="form-control">
                        </div>
                        <div class="form-group">
                            Your Question:<input type="password" name="password" placeholder="your Question" class="form-control">
                        </div>
                              <a href="mailto:nenikagupta29@gmail.com?subject=Query"> <input type="submit" name="" value="Submit" class="btn btn-primary"> </a>
                              </form>
                              <br> <br>
                        </div>

                </div>
            </div>
        </div>
    <?php
      include 'includes/footer.php';
      ?>
  </body>
</html>
