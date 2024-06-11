<?php
      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "iwb";
      
      $con = mysqli_connect($server, $username, $password,$database);
      if (!$con) {
        die("Connection to the database failed due to: " . mysqli_connect_error());
      }
      $first = $_POST['first'];
      $last = $_POST['last'];
      $email = $_POST['username'];
      $Password = $_POST['password'];
      $sql = "INSERT INTO `signup` (`first`, `last`, `username`, `password`) VALUES ('$first', '$last', '$email', '$Password')";
      if($con->query($sql) == true) {
          $insert = true;
      } else {
      echo "ERROR: $sql <br> " . mysqli_error($con);
      }
      //echo "Connected";  
      $con->close();
      header('Location: 1.html');
?>