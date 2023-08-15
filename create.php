<?php
    include 'connect.php';

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `users` (name, email, mobile, password) VALUES ('$name','$email','$mobile','$password')";
        $user_query = mysqli_query($con, $sql);
        if($user_query) {
            echo "Data inserted successfully";
            header('Location:read.php');
        } else {
            die(mysqli_error($con));
        }
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <div class="nwt-users">
        <form method="post">
            <input type="text" name="name" placeholder="Your Name">
            <input type="email" name="email" placeholder="Your email">
            <input type="text" name="mobile" placeholder="Your Mobile Number">
            <input type="text" name="password" placeholder="Your password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>