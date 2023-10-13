<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    
    $lowercase = preg_match('/[a-z]/', $password);
    $uppercase = preg_match('/[A-Z]/', $password);
    $min_length = strlen($password) >= 8;
    $special_char = preg_match('/[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/', $password);
    $number = preg_match('/\d/', $password);
    
    if ($lowercase && $uppercase && $min_length && $special_char && $number) {
        // Password meets all requirements
        echo "Password is valid!";
    } else {
        // Password does not meet all requirements
        echo "Password is not valid!";
    }
}
?>
