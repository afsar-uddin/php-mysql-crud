<?php
    include "connect.php";

    if(isset($_GET['deleteId'])) {
        $id = $_GET['deleteId'];

        $sql = "delete from `users` where id = $id";
        $sql_query = mysqli_query($con, $sql);

        if($sql_query) {
            echo "Data deleted successfully!";
            header("Location:read.php");
        } else {
            die(mysqli_error($con));
        }


    }


?>