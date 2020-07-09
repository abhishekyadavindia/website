<?php
//        if($_POST["username"] == '' || $_POST["pin"] == '')  
// {  
//     echo '<script>alert("Alle felter SKAL udfyldes!")</script>';  
// }
require "connection.php";

    $sql1 = "SELECT * FROM `signup` WHERE `email` = 'abhishek@abhishek.com'";
    $result = mysqli_query($conn, $sql1);
    $check = mysqli_num_rows($result);
      if ($check>0) {
        echo "HelloWorld";
      }
      else {
        //   No Error
      }
?>