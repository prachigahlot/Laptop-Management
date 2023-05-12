<?php
require "includes/common.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Laptops</title>
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
                <h1>Welcome!</h1>
                <p>Select your own laptop</p>
            </div>
       </div><center><h1>You can choose only one</h1></center>
      <form method="post" action="cart-add.php">
     <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="image/laptop_1.jpg" alt="image">
                <div class="caption">
                    <h3>DELL Laptop</h3>
                <h5>Issue Price:Rs.6000.0</h5>
                <p>Dell Latitude E6420 Laptop - HDMI - Intel i5 2.5ghz - 6GB DDR3 - 320GB - DVDRW - Windows 10 64bit - Refurbished</p>
                <input type="radio" name="radios" value="DELL" class="form-control">

                </div>
            </div>
             <div class="col-md-3 col-sm-6 thumbnail">
                <img src="image/laptop_2.jpg" alt="image">
                <div class="caption">
                    <h3>Lenevo Laptop</h3>
                <h5>Issue Price:Rs.7000.0</h5>
                <p>2018 Lenovo 330 17.3" HD+ LED Backlight Laptop Computer, 8th Gen Quad Core i5-8250U up to 3.40GHz, 8GB DDR4 RAM, 1TB HDD, DVDRW, 802.11ac WiFi, Bluetooth, Type-C, HDMI, Windows 10</p>
                  <input type="radio" name="radios" value="Lenevo" class="form-control">

                </div>
            </div>
             <div class="col-md-3 col-sm-6 thumbnail">
                <img src="image/laptop_3.jpg" alt="image">
                <div class="caption">
                    <h3>HP Laptop</h3>
                <h5>Issue Price:Rs.5000.0</h5>
                <p>HP Chromebook 11 G5 - Education Edition - 11.6" - Celeron N3060 - 4 GB RAM - 16 GB SSD - US</p>

                 <input type="radio" value="HP1" name="radios" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="image/laptop_2.jpg" alt="image">
                <div class="caption">
                    <h3>HP Laptop2</h3>
                <h5>Issue Price:Rs.5000.0</h5>

                <p>HP Black Licorice 15.6" 15-F387WM Laptop PC with AMD A8-7410 Processor, 4GB Memory, touch screen, 500GB Hard Drive and Windows 10 Home</p>
                   <input type="radio" value="HP" name="radios" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="image/laptop_3.jpg" alt="image">
                <div class="caption">
                    <h3>ACER</h3>
                <h5>Issue Price:Rs.4500.0</h5>

                <p>Acer - Switch 5 2-in-1 12" Refurbished Touch-Screen Laptop - Intel Core i5 - 8GB Memory - 256GB Solid State Drive - Gray</p>
                 <input type="radio" value="Acer" name="radios" class="form-control">
                </div>
            </div>
                        <div class="col-md-3 col-sm-6 thumbnail">
                <img src="image/laptop_1.jpg" alt="image">
                <div class="caption">
                    <h3>Google</h3>
                <h5>Issue Price:Rs.8000.0</h5>

                   <input type="radio" value="Google" name="radios" class="form-control">
                </div>
            </div>
        </div>
           <div class="form-group">
                              <h4>Enter your's E-mail </h4>
                              <input type="text" name="email"  placeholder="enter the email id" class="form-control">
                                <br>
                                        <input type="submit" value="issue" name="issue" class="btn-lg btn-primary btn-block">
                                    </div>
        </div>
      </form>
         <footer>
                <div class="container">
                    <center>
                        <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
                    </center>
                </div>
            </footer>

    </body>
</html>
