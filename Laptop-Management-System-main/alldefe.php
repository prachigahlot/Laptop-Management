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
          <form class="" action="deletentry.php" method="post">

           <?php
           include 'includes/header.php';







              $select_query="SELECT * FROM defects";
              $select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
              $total_rows_fetched= mysqli_num_rows($select_query_result);

                 if($total_rows_fetched==0)
{
    echo "no user with email and password in defect";
}
 else {?>
            <div id="t2">
                <h2>Details of all those who have problem</h2> <br>
                <?php echo"<table border='1'>";

echo "<tr>";
echo " <th>dno </th> <th>Applicant id</th><th>problem</th><th>Laptop_id</th><th>";
echo "</tr>";
while($row=mysqli_fetch_array($select_query_result))
{

echo "<tr>";
echo "<td>",$row['p_id'],"</td><td>",$row['applicant_id'],"</td><td>",$row['problem'],"</td><td>",$row['laptop_id'],"</td>","<td>  <a href='deletentry.php?em=' ",$row['applicant_id' ], "class='btn btn-danger'>delete</a> </td>";

echo"</tr>";
}
echo "</table>";
echo"<br><br><br><br>";
 }

              ?>
            </div>
                <?php
            include 'includes/footer.php';
            ?>
                    </form>
     </body>
</html>
