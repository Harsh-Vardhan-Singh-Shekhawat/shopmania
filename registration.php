<?php

    $uname = $_POST['uname'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
    if($pass1!=$pass2){
        echo "<h3>Password didn't match!
        <br>
        Try again!"; 
        die; 
    }
    // Database link (shopmania)
    $database = mysqli_connect('localhost','root','',"shopmania");

    $cmd = "select * from users where username = '$uname'";
    $query = mysqli_query($database,$cmd);
    $row_count = mysqli_num_rows($query);

    if($row_count>0){
        echo "<h3>Username already exist.
        Try different username</h3>";
        die;
    }
    $cmd = "insert into users(username, password) values('$uname','$pass1')";
    $query = mysqli_query($database,$cmd);
    echo "User is registered successfully";

?>