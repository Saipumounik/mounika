<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        header {
            background-color: #1ad7f4;
            color: #181010;
            padding: 10px;
            text-align: center;
        }
        #profile-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        footer {
            background-color: #1ad7f4;
            color:#181010;
            text-align: center;
            padding: 10px;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if($_POST['un'] == 'abc' && $_POST['pw'] == 'def')
{
    session_start();

    $_SESSION['status'] = "success";
	header("Location:profile.php");
}
}
?>
<body>
<header>
        <img id="profile-photo" src="profile.jpg" alt="Your Profile Photo">
        <h1>SAIPU MOUNIKA </h1>
        <p>Registration Number: 21MIS7083</p>
    </header>
    <form action="" method="POST">
        USERNAME:<input type="text" name="un">
        PASSWORD:<input type="text" name="pw">
        <input type="submit">
</form>
<footer>
        <p>Contact Information: saipumounika3@gmail.com </p>
        <p>9949306944</p>
    </footer>


</body>
</html>