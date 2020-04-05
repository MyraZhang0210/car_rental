
<?php

      $registration_number = $_POST['registration_number'];
      $oneday_price = $_POST['oneday_price'];
      $car_status=$_POST['car_status'];
      $maintenance_date=$_POST['maintenance_date'];
      $date_work_done=$_POST['date_work_done'];
      $work_done=$_POST['work_done'];
      $type_id=$_POST['type_id'];
      $Garage_id=$_POST['Garage_id'];

      require('connect.php');
      $result = $conn->query("select * from Car");

      $sql = " INSERT INTO Car(registration_number, oneday_price, car_status, maintenance_date, date_work_done, work_done, type_id, Garage_id) values ('$registration_number', '$oneday_price', '$car_status', '$maintenance_date', '$date_work_done','$work_done','$type_id','$Garage_id')";
      
      $result = $conn->query($sql);

              header ("Location: index.php");


?>
