
<?php

      $registration_number = $_POST['registration_number'];
      $oneday_price = $_POST['oneday_price'];

      $maintenance_date=$_POST['maintenance_date'];
      $date_work_done=$_POST['date_work_done'];
      $work_done=$_POST['work_done'];

      if (isset($_POST['type_id']) && is_numeric($_POST['type_id']))
   $type_id= $_POST['type_id'];
   else 
   $type_id= 0;


 if (isset($_POST['Garage_id']) && is_numeric($_POST['Garage_id']))
   $Garage_id= $_POST['Garage_id'];
else 
   $Garage_id= 0;
  

      var_dump($_POST);

      require('connect.php');
      $result = $conn->query("SELECT * from Car");


      $sql = "INSERT INTO Car(registration_number, oneday_price, maintenance_date, date_work_done, work_done, type_id, Garage_id) values ('$registration_number', '$oneday_price', '$maintenance_date', '$date_work_done','$work_done','$type_id','$Garage_id')";
      
      $result = $conn->query($sql);

       

      echo "res:";
      echo $result; 
      echo $conn-> error; 
      $conn->close();

              header ("Location: data.php");


?>
