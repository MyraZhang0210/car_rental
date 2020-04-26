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

  padding:15px;
text-align:left;
font-family: "Lucida Console", Monaco, monospace; 
font-size:13px;
color: snow;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
}

h1
{
  font-family: 'Atomic Age';
  font-size: 55px;
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
  <a href="Homepage.php">Home</a>
  <a href="AddCarForm.php">Car Details </a>
   <a class="active" href="bookpage.php">Booking Details</a>
   <a href="rental.php">Book Now</a>
   <a href="https://docs.google.com/document/d/1hzsN-suW5oQsNF2Qf4G9tBy6YbgypinADazERuzflyI/edit?usp=sharing"></i>About</a></li>
  <input type="text" placeholder="Search..">
</div>


<h1 class = "text-danger"> Booking Details </h1>
</head>

<body>

  
<div class="container">

<?php

	require('connect.php');
//$sql = "SELECT * From Car, Driver, Customer, Booking 
//Where Booking.c_id = Customer.customer_id AND Booking.d_id = Driver.driver_id AND Booking.regis_no = Car.registration_number ";

//$sql = "SELECT Booking.book_id, Booking.book_date, Booking.book_days, Booking.driver_option, Booking.pick_up, Booking.drop_off, Booking.bill_price,Booking.deposit_amount, Booking.bill_status, Booking.billing_date, Booking.c_id, Booking.d_id, Booking.regis_no, Car.registration_number, Driver.dname, Driver.driver_id, Customer.customer_id, Customer.name from Booking Join Car ON (Booking.regis_no = Car.registration_numeber Join Driver ON (Booking.d_id = Driver.driver_id) Join Customer ON (Booking.c_id = Customer.customer_id) " ;

$sql = "SELECT * from Booking a left join Car b on a.registration_number = b.registration_number left join Driver c on a.driver_id = c.driver_id left Join Customer d on a.customer_id = d.customer_id";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) 
{

	echo '<table table-hover>';
	echo '<tr bgcolor=#1D3F7A>
	<th>Booking ID</th>
  <th>Booking date</th>
  <th>Booking Days</th>
  <th>Pick Up Location</th>
	<th>Drop Off Location</th>
  <th>Booking price</th>
  <th>Billing date</th>
  <th>Car Resigration Number</th>
  <th>Driver Name</th>
  <th>Customer Name</th>
    </tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo '<tr bgcolor=#009BD6>';
    	echo '<td>'.$row["book_id"]. '</td>';
      echo '<td>'.$row["book_date"]. '</td>';
      echo '<td>'.$row["book_days"]. '</td>';
      echo '<td>'.$row["pick_up"]. '</td>';
      echo '<td>'.$row["drop_off"]. '</td>';
      echo '<td>'.$row["bill_amount"]. '</td>';
      echo '<td>'.$row["billing_date"]. '</td>';
      echo '<td>'.$row["registration_number"].'</td>';
      echo '<td>'.$row["dname"]. '</td>';
      echo '<td>'.$row["name"]. '</td>';
      echo'</tr>';
    }
    echo '</table></br>';
}
 else {
    echo "0 results";
}


/*echo "<form action = 'bookpage.php'>
<h3>Make new Booking</h3> 
<p>
    Booking Date: <input type='text'> <br/>
    Booking Days: <input type='text'> <br/>
    Driver Option: <input type='text'> <br/>
    Choose Driver: <input type='text'> <br/>
    <input type ='submit' value ='Make Booking'>
    </form></p>" ;*/

$conn->close();
?>


</body>
</html>
