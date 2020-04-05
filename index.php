<?php
if(isset($_POST["AddContent"]))
{
header('location:AddCarForm.php');
}
?>

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
   <a class="active" href="data.php">Car Details</a>
     <a href="bookpage.php">Booking Details </a>
      <a href="rental.php"> Book Now </a>
      <a href="https://docs.google.com/document/d/1hzsN-suW5oQsNF2Qf4G9tBy6YbgypinADazERuzflyI/edit?usp=sharing"></i>Help</a>
  <input type="text" placeholder="Search..">
  <form name ="form1" action="" method="post">
      <input type ="submit" name ="AddContent" value ="Add Content">
     </form>
  
</div>



<h1 class="text-danger"> Cars Details </h1>
</head>

<body>

      

 <?php 

require('connect.php');
$result = $conn->query("select * from Car");

var_dump($_POST);


$sql = "SELECT * from Car";
$result = $conn->query($sql);

$return_arr = array();


if ($result->num_rows > 0) 
{
  echo '<table table-hover>';
  echo '<tr bgcolor=#1D3F7A>
  <th>Registeration Number</th>
  <th>Price/day</th>
  
  <th>Car Status</th>
  <th>Next Maintenance Date</th>
  <th>Maintenane Details</th>
  <th>Last Maintenance Date</th>
  <th>Car Type ID </th>
  <th>Garage Type ID </th>

  
    </tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<tr bgcolor=#009BD6>';
      echo '<td>'. $row["registration_number"]. '</td>';
      echo '<td>'. $row["oneday_price"]. '</td>';
      echo '<td>'. $row["car_status"]. '</td>';
      echo '<td>'. $row["maintenance_date"]. '</td>';
      echo '<td>'. $row["work_done"]. '</td>';
      echo '<td>'. $row["date_work_done"]. '</td>';
      echo '<td>'. $row["type_id"]. '</td>';
      echo '<td>'. $row["Garage_id"]. '</td>';


      
      echo'</tr>';
    }
     echo '</table></br>';
}
 else {
    echo "0 results";
}



$conn->close();
?>


</body>
</html>
