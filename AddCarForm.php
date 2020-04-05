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
   <a class="active" href="index.php">Car Details</a>
     <a href="bookpage.php">Booking Details </a>
      <a href="rental.php"> Book Now </a>
      <a href="https://docs.google.com/document/d/1hzsN-suW5oQsNF2Qf4G9tBy6YbgypinADazERuzflyI/edit?usp=sharing"></i>Help</a>
  <input type="text" placeholder="Search..">
  
</div>


<h1 class="text-danger"> Cars Details </h1>
</head>

<body>


<div class="container">
        <div style="text-align:center">
            <h2 style="color:#00006a">Add New Car</h2>
        </div>
        <div class="row">
            <div class="column">
             </div>
             <div class="column">
             <form action="insertform.php" method="post">
                <label for="registration_number" style="color:#00006a">Registration Number</label>
                <input type="text" id="registration_number" name="registration_number" placeholder="Registration number..">
                <br>
                <label for="oneday_price" style="color:#00006a">Price/day</label>
                <input type="text" id="oneday_price" name="oneday_price" placeholder="Price/day..">
                <br>
                <label for="work_done" style="color:#00006a">Details Work Done</label>
                <input type="text" id="work_done" name="work_done" placeholder="Details Work Done">
                <br>
                <label for="maintenance_date" style="color:#00006a">Maintenance Date</label>
                <input type="date" id="maintenance_date" name="maintenance_date" >
                <br>
                <label for="date_work_done" style="color:#00006a">Last Maintenance Date</label>
                <input type="date" id="date_work_done" name="date_work_done" placeholder="YYYY-MM-DD">
                 <br>
                  <label for="car_status" style="color:#00006a">Car Status</label>

                 <select  id="car_status">

                <option value="0">0</option>
                <option value="1">1</option>
              </select>
                   <br>
                 <label for="type_id" style="color:#00006a">Type ID</label>
               
                <?php 

                require('connect.php');

                  $sql= "SELECT type_id from CarType";
                  $result = $conn -> query($sql);
                         echo "<select id=\"type_id\">";
                  while ($row =$result->fetch_assoc())
                  {
             
                    echo "<option value".$row['type_id'].">".$row['type_id']."</option>";
                

          
                  }
                      echo "</select>";
                  $conn->close();
                  ?>
                     <br>
                  <label for="garage_id" style="color:#00006a">Garage ID</label>
                
                <?php 

                require('connect.php');
                  $sql= "SELECT Garage_id from Garage";
                  $result = $conn -> query($sql);
                  echo "<select id=\"Garage_id\">";
                  while ($row =$result->fetch_assoc())
                    
                  {
                 
                     echo "<option value".$row['Garage_id'].">".$row['Garage_id']."</option>";
                
                  }

                  echo "</select>";
                  $conn->close();
                  ?>

                <br>
      <input type ="submit"= value ="Add ">

            </form>
            </div>
        </div>
    </div>
      
<body>
