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
            <?php





              $select_query="SELECT * FROM laptopDB.applicant";
              $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
              $total_rows_fetched= mysqli_num_rows($select_query_result);?>
            <div id="t1">
                <h2>Details of all applicant</h2>
          <?php       echo"<table border='2'>";

echo "<tr>";
echo "<th>Name</th> <th>Email id </th> <th>College</th><th>Course</th><th>Contact no</th><th>Address</th><th>City</th>";
echo "</tr>";
while($row=mysqli_fetch_array($select_query_result))
{

echo "<tr>";
echo "<td>",$row['name'],"</td><td>",$row['email'],"</td><td>",$row['college'],"</td><td>",$row['course'],"</td><td>",$row['contact'],"</td><td>",$row['address'],"</td><td>",$row['city'],"</td>";
echo"</tr>";
}
echo "</table>";
echo"<br><br><br><br>";?>
            </div>

           <?php include 'includes/footer.php';?>
        </div>
     </body>
</html>
