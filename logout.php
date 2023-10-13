<?php
session_start();
session_unset();
session_destroy();
echo "<br>Your session has been terminated<br>";
?>

<!-- Add a button to redirect to login.php -->
<a href="login.php"><button>Go to Login</button></a>


