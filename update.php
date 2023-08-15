<?php
    include "connect.php";
    
        $id = $_GET['updateId'];
    
        $sql = "select * from `users` where id=$id";
        $sql_query = mysqli_query($con, $sql);
        $sql_data = mysqli_fetch_assoc($sql_query);
    
        $name = $sql_data['name'];
        $email = $sql_data['email'];
        $mobile = $sql_data['mobile'];
        $password = $sql_data['password'];
    

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql_update = "update `users` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";

        $sql_update_query = mysqli_query($con, $sql_update);
        if($sql_update_query) {
            echo "Data updated successfully";
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
    <title>Update</title>
</head>
<body>
    <div class="nwt-users">
        <form method="post">
            <input type="text" name="name" placeholder="Your Name" value="<?php echo $name; ?>">
            <input type="email" name="email" placeholder="Your email" value="<?php echo $email; ?>">
            <input type="text" name="mobile" placeholder="Your Mobile Number" value="<?php echo $mobile; ?>">
            <input type="text" name="password" placeholder="Your password" value="<?php echo $password; ?>">
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>