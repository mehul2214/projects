<?php
      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "iwb";
      
      $con = mysqli_connect($server, $username, $password,$database);
      if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
      }
      $Password = $_POST['password'];
      $Pass = $_POST['pass'];
      $Passw = $_POST['passw'];
      $sql = "INSERT INTO `signup` (`first`, `last`, `username`, `password`) VALUES ('$first', '$last', '$email', '$Password')";
      $sql = "UPDATE signup SET `password`='$Pass' WHERE `password`='$Password'";
      if($con->query($sql) == true) {
          $update = true;
      } else {
      echo "ERROR: $sql <br> " . mysqli_error($con);
      }
      //echo "Connected";  
      $con->close();
      header('Location: 1.html');
?>