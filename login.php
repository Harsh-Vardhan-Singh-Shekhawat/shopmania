<?php

    start_session();
    $_SESSION['login_status'] = 'failed';

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    // database
    $database = mysqli_connect('localhost','root','','shopmania');
    $cmd = "select * from users where (username,password) = ('$uname','$pass') ";
    $query = mysqli_query($database,$cmd);
    $row_count = mysqli_num_rows($query);

    if($row_count == 0){
        echo "<h1>User doesn't exist!<br></h1>
        <a href='login.html'>Go To Login Page</a>
        ";
        $_SESSION['login_status'] = 'failed';
        die;
    }
    
    // link to Home Page of website
    $_SESSION['login_status'] = 'success';
    echo "<h1>Login Success! <h1/>";
    header('location:home.php');    
    
    
?>
<!-- 
    row count = 0 -> register user
    row counnt =1= -> die=rect to HOME PAge 
    row count >1  -->