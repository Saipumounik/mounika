<?php
// Define the correct username and password (replace with your actual values)
$correctUsername = "mounika";
$correctPassword = "21mis7083";

// Retrieve user input from the login form
$userInputUsername = $_POST['username'];
$userInputPassword = $_POST['password'];

// Check if the input username and password match the correct values
if ($userInputUsername === $correctUsername && $userInputPassword === $correctPassword) {
    // Redirect to the profile page with a welcome message
    header("Location: profile1.php?username=$correctUsername");
    exit();
} else {
    // Display a "login failed" message and provide a link to go back to the login page
    echo "Login failed. Please <a href='login1.html'>try again</a>.";
}
?>

