<?php
    if (isset($_POST["username"])) 
    {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "iwb";
        
        $email = $_POST["username"];
        $Password = $_POST["password"];

        $con = new mysqli($server, $username, $password, $database);
        if ($con->connect_error) {
            die("Connection to the database failed due to: " . mysqli_connect_error());
        }
        else{
            $stmt = $con->prepare("select * from `signup` where username = ?") ;
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result =$stmt->get_result();
            if($result->num_rows > 0){
                $data =$result->fetch_assoc();
                if($data['password'] == $Password){
                    echo "<h1>Login Sucessfully</h1>";
                    echo "<script>location.replace('index.html')</script>";
                }
                else{
                    echo "<h1>Wrong Password</h1>";
                }
            }
            else{
                echo "<h1>Invalid Credentials</h1>";
            }

        }
    }
?>
