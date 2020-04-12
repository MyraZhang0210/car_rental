
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Atomic Age' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
  table, th, td
   {
  
  border: 1px solid white;
  
}

 th, td
{ 
  padding:5px;
text-align:left;
color: snow;
font-family: "Lucida Console", Monaco, monospace; 
font-size:13px;

}

h1
{
  font-family: 'Atomic Age';
  font-size: 55px;
}

h3
{
  font-family: 'Atomic Age';
  font-size: 30px;
}

p
{
  font-family: "Lucida Console", Monaco, monospace; 
  font-size: 15px;
}



* {box-sizing: border-box;}

body {
 font-family: 'Atomic Age';
  font-size: 30px;
}

.topnav {
  overflow: hidden;
  background-color: #000000;
}

.topnav a {
  float: left;
  display: block;
  color: yellow;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #BE2200;
  color: yellow;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }

   .logo-image{
    width: 46px;
    height: 46px;
    border-radius: 50%;
    overflow: hidden;
    margin-top: -6px;
}
}

</style>
<title> Cars Rental</title>
<link rel="shortcut icon" type = "image/png" href="favicon.png">
<div class="topnav">
  <div class="container-fluid">
    <div class="container-header" >
      <a class="navbar-brand" href="Home.php" style="padding-top:5px">
      <img src="rental.png" alt="Logo" style="width:45px">
</a>
</div>
</div>
  <a href="Home.php">Home</a>
   <a  href="data.php">Car Details</a>
     <a href="bookpage.php">Booking Details </a>
      <a class="active" href="rental.php"> Book Now </a>
      <a href="https://docs.google.com/document/d/1hzsN-suW5oQsNF2Qf4G9tBy6YbgypinADazERuzflyI/edit?usp=sharing"></i>Help</a>
  <input type="text" placeholder="Search..">

  
</div>



<h1 class="text-danger"> Booking Details </h1>
</head>

<body>

   Your Booking is Successful 
<?php

$customer_id = $_POST['customer_id'];
      $registration_number = $_POST['registration_number'];
      $book_date=$_POST['book_date'];
      $book_days=$_POST['book_days'];
      $driver_id=$_POST['driver_id'];
      $oneday_price =$_POST['oneday_price'];
echo "<br>";
         // var_dump($_POST);
echo "<br>";


 print ("<h class=\" text-primary\"> $customer_id </h> <br>");
 print ("<h class=\" text-primary\"> Your Booking information: </h> <p class=\"text-success\"> <br> Booking Date: $book_date <br> Days: $book_days <br> Driver: $driver_id <br> </p> <br>");

print ("<p class=\"text-success\"> Your Booking Amount is $oneday_price*$book_days </p> <br>");
  print ("<p class=\"text-success\"> Your Billing  Date  is $book_date + $book_days  days</p> <br>");

    
 


  ?>
<br>
 

      </body>
