<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="css/style.css" />
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
  font-size: 10px;
}

body
{

  font-family: 'Atomic Age';
  font-size: 20px;
}

form 
{

  font-family: 'Atomic Age';
  font-size: 20px;

}


* {box-sizing: border-box;}


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

@media screen and (max-width: 600px)
 {
  .topnav a, .topnav input[type=text] 
  {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  }

.topnav input[type=text] 
{
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}


  .topnav input[type=text]
  {
    border: 1px solid #ccc;  
  }


 input[type=text], input[type=number],select, textarea 
 {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    }

    input[type=submit] {
    background-color: #D60000;
    color: yellow;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    }

    input[type=submit]:hover {
    background-color: #FF0000;
    }
    .container
     {
    border-radius: 5px;
    background-color: #000000;
    padding: 10px;
    }
    .column
     {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
    }

    .row:after 
    {
    content: "";
    display: table;
    clear: both;
    }

    @media screen and (max-width: 700px) 
    {
    .row
     {   
        flex-direction: column;
    }

    }

    @media screen and (max-width: 400px) 
    {
    .navbar a
     {
        float: none;
        width: 100%;
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
  <a href="a4.php">Car Details </a>
  <a href="bookpage.php">Booking Details </a>
  <a class="active" href="rental.php"> Book Now!!! </a>
  <a href="https://docs.google.com/document/d/1hzsN-suW5oQsNF2Qf4G9tBy6YbgypinADazERuzflyI/edit?usp=sharing"></i>About</a></li>
</div>
<h1> Welcome to Booking Page <h1>
</head>

<body>
  <div class="container">
        <div style="text-align:center">
            <h2 style="color:#FFFF00">Make New Booking</h2>
        </div>
        <div class="row">
            <div class="column">
                <img src="Welcome.png" style="width:90%">
             </div>
             <div class="column">
             <form action="bookinginfo.php" method="post">

              <label for="customer_id" style="color:#FFFF00">Customer Selection :</label>
<?php 

                require('connect.php');

                  $sql= "SELECT * from Customer";
                  $result = $conn -> query($sql);
                         echo "<select id=\"customer_id\" name = \"customer_id\">";
                  while ($row =$result->fetch_assoc())
                  {
             
                    echo "<option value=".$row['customer_id'].">".$row['customer_id'].":".$row['name']."</option>";
                
          
                  }
                      echo "</select>";
                       $conn->close();
      ?>
      <br>
        <label for="book_id" style="color:#FFFF00">Booking ID :</label>
                <input type="number" id="book_id" name="book_id"  placeholder="....100">       

      <br>
        
  
                      <label for="registration_number" style="color:#FFFF00">Choose Car :</label>
<?php 

                require('connect.php');

                  $sql= "SELECT * from Car,CarType where Car.type_id = CarType.type_id";
                  $result = $conn -> query( $sql);
                         echo "<select id=\"registration_number\" name = \"registration_number\">";
                  while ($row =$result->fetch_assoc())
                  {
             
                    echo "<option value=".$row['registration_number'].">".$row['car_description'].": ‎฿".$row['oneday_price']."</option>";
                    

                  }
                   

                      echo "</select>";
                            $conn->close();
      ?>
      <br>
             <label for="book_date" style="color:#FFFF00">Booking Date :</label>
                <input type="date" id="book_date" name="book_date" >

                <br>

                <label for="book_days" style="color:#FFFF00">Booking Days :</label>
                <input type="number" id="book_days" name="book_days">       

                <br>

                 <label for="driver_option" style="color:#FFFF00">Choose Driver :</label>


        
<?php 

                require('connect.php');
                
                  $sql= "SELECT * from  Driver ";
                  echo "<select id=\"driver_id\" name = \"driver_id\">";
                   echo "<option value=\"0\">No Driver</option>";
                  
                  $result = $conn -> query($sql);
                  while ($row =$result->fetch_assoc())
                  {

             
                    echo "<option value=".$row['driver_id'].">".$row['driver_id'].":".$row['dname']."</option>";
                    

                  }

                      echo "</select>";
                            $conn->close();
      ?>

      <br>

<label for="locations" style="color:#FFFF00">Choose Your Desire Pick up and Drop off location:</label>
<select id="locations" name = "locations">
  <option value="Hleden Rd. 314 ">Hleden Rd. 314</option>
  <option value="Bogyoke Rd. 112">Bogyoke Rd. 112</option>
</select>

      
          
<br>
      <input type ="submit" value ="Add">

            </form>

            </div>
          </div>

          


  </body>
</html>
