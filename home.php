<?php
   
    session_start();
    $login_status = $_SESSION['login_status'];

    if($login_status == 'failed'){
        echo "<h3>Unable To Login</h3>";
        die;
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>WELCOME TO HOME PAGE!</h1>
</body>
</html>