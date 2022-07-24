<?php 
  // Start the session
  session_start();

  // Set session variables
  $_SESSION["color"]= "blue";
  $_SESSION["animal"]= "dog";
  echo "The session variable are set up.";
?>