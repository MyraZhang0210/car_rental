
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Atomic Age' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    color:#D60000;
}

p
{
  font-family: "Lucida Console", Monaco, monospace; 
  font-size: 15px;
}



* {box-sizing: border-box;}

body {

  font-family: "Lucida Console", Monaco, monospace; 
  font-size: 22px;
  color:#770000;
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


.button {
  background-color: #000000; /* Green */
  border: none;
  color: yellow;
  padding: 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 4px;}



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
  <a href="Homepage.php">Home</a>
   <a  href="AddCarForm.php">Car Details</a>
     <a href="bookpage.php">Booking Details </a>
      <a class="active" href="rental.php"> Book Now!!!</a>
      <a href="https://docs.google.com/document/d/1hzsN-suW5oQsNF2Qf4G9tBy6YbgypinADazERuzflyI/edit?usp=sharing"></i>Help</a>
  
</div>



<h1 class="text-danger" align ="center"> Booking Details </h1>
</head>


<body>

  <div class="container">
<?php
require('connect.php');
$customer_id = $_POST['customer_id'];
    //  $registration_number = $_POST['registration_number'];
      if (isset($_POST['registration_number']) && is_numeric($_POST['registration_number']))
   $registration_number= $_POST['registration_number'];
   else 
   $registration_number= 0;


      $book_date=$_POST['book_date'];
      $book_days=$_POST['book_days'];
      $driver_id=$_POST['driver_id'];
      $locations =$_POST['locations'];

      $sql = "SELECT name from Customer where customer_id='$customer_id'";
      $result = $conn->query($sql);

      
       while($row = $result->fetch_assoc() ) 
       {

        $customer_name = $row["name"];

   }

    $sql = "SELECT dname from Driver where driver_id='$driver_id'";
      $result = $conn->query($sql);

      
       while($row = $result->fetch_assoc() ) 
       {

        $driver_name = $row["dname"];

   }
    
      $sql = "SELECT oneday_price from Car where registration_number='$registration_number'";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) 
      {

       while($row = $result->fetch_assoc() ) 
       {
         $info = $book_days*$row["oneday_price"];

    }
    } 
    else {
      echo 'Error 1';
      die("Error : More than one result array".__LINE__);

    }
  
     // echo "$oneday_price";


echo "<br>";
         // var_dump($_POST);
echo "<br>";

 print ("<h3> Your Booking is Successful $customer_name.<br>");
  print ("<h3> Thank You for Booking with Zhang's Family Car Rental.<br>");

 print ("<h3> Your Booking information: </h3> <p class=\"text-success\"> <br> Booking Date: $book_date <br> Days: $book_days <br> Driver: $driver_name  </p>");
  print ("<p class=\"text-success\"> Your Billing  Date  is $book_date and you'll be charged  ‎฿ $info.</p> <br>");
  print ("<p class=\"text-success\"> The pick up and drop off location is $locations.</p> <br>");

$conn->close();

  ?>

 <?php

 require('connect.php');

       if (isset($_POST['customer_id']) && is_numeric($_POST['customer_id']))
   $customer_id= $_POST['customer_id'];
   else 
   $customer_id= 0;


      if (isset($_POST['registration_number']) && is_numeric($_POST['registration_number']))
   $registration_number= $_POST['registration_number'];
   else 
   $registration_number= 0;

      $book_date=$_POST['book_date'];
      $book_id = $_POST['book_id'];
      $book_days=$_POST['book_days'];
      if (isset($_POST['driver_id']) && is_numeric($_POST['driver_id']))
   $driver_id= $_POST['driver_id'];
   else 
   $driver_id= 0;

      $locations =$_POST['locations'];


      $sql = "SELECT oneday_price from car where registration_number='$registration_number'";
      $result = $conn->query($sql);

      
       while($row = $result->fetch_assoc() ) 
       {


         $totalbill = $book_days*$row["oneday_price"];
        

   }


 
      $result = $conn->query("SELECT * from Booking");


      $sql = "INSERT INTO Booking(book_id, bill_amount, book_date, book_days, pick_up, drop_off, billing_date, customer_id, driver_id, registration_number) values ('$book_id', '$totalbill', '$book_date', '$book_days','$locations','$locations','$book_date','$customer_id','$driver_id','$registration_number')";
      
      $result = $conn->query($sql);

      $conn->close();

?>


<div class ="container">
  <button class="button button1" onclick="window.location.href = 'rental.php';" >Back to Booking</button>
</div>

 
 </div>
      </body>
