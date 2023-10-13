<?php

session_start();
if($_SESSION['status']=="success"){
  
    echo "WELCOME TO PROFILE PAGE";
 
    }
 else{

    echo "You cant not access the prfile page without login";
 }

?>

<form action="logout.php">
<input type="submit" value="LOGOUT">

</form>