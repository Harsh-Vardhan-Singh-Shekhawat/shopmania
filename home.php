<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>WELCOME TO HOME PAGE!</h1>
</body>
</html>
<?php
   
    session.auto_start();
     $_SESSION['login_status'] = $login_status;

    if(! $login_status){
        echo "<h3>Unable To Login</h3>";
        die;
    }
    $username = $_SESSION['$username'];
    echo "<h3>Hi '$username' !, Hope you are doing well</h3><br><br>";
    echo "<a href='logout.php'>LOGOUT</a>";


    
?>
