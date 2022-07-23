<?php

    start_session();
    $_SESSION['login_status'] = 'failed';

    $uname = $_POST['uname'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
    $encrypted_pass = md5($pass1); // md5 used to hide password i.e. to encrypt data
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
        echo "<h3>Username already exist!<br><br>
        Try different username.</h3>
        <a href='registration.html' class='a'>Continue to Register</a>";
        die;
    }
    $cmd = "insert into users(username, password) values('$uname','$encrypted_pass')";
    $query = mysqli_query($database,$cmd);
    echo "User is registered successfully";
    

?>