<?php

    // Get values passed from the form in login.php file
    $username = $_POST['username'];
    $password=  $_POST['password'];

        // to prevent mysql injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        //$username = mysql_real_escape_string($username);
        //$password = mysql_real_escape_string($password);
        $user = 'root';
        $pass = '';
        $database = 'login';
        // query the database for the user
        $result = mysqli_query("select * from users where username = '$username' and password = '$password'");
        $connection = new mysqli('localhost', $user, $pass , $database) or die("Failed to query database ". mysql_error());
        $row = mysqli_num_rows($result);

        if($row['username']==$username && $row['password'] == $password) {
            echo "Login Success!! Welcome " . $row['username'];
            
        } else {
            echo "Failed to login! ";
        }
        
        echo 'You have connected successfully';
        
?>
