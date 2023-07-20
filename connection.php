<?php      
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "book_db";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
             
    $username1 = $_POST['username'];  
    $password1 = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username1 = stripcslashes($username1);  
        $password1 = stripcslashes($password1);  
        $username1 = mysqli_real_escape_string($con, $username1);  
        $password1= mysqli_real_escape_string($con, $password1);  
      
        $sql = "select *from login where username = '$username1' and password = '$password1'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:home.php');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?> 
    