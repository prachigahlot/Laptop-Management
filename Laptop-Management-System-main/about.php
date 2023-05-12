<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <?php
    require "includes/header.php";
    ?>

    <div id="jum" class="container">
         <div class="jumbotron">
             <h1>Welcome!</h1>
             <p>
               This is Laptop Management System. This System automate issuing of Laptops in the Colleges like Delhi University.
               In this System there are two levels of person:- One is Student and another is Admin. Students can login and issue laptops
                and can raise issue if their laptop contains some defects. Admin can login and can check how many students have raise the issues
                and can delete the issues after repair their laptops.
             </p>
         </div>
    </div>
    <?php
      include 'includes/footer.php';
    ?>
  </body>
</html>
