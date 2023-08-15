<?php

$con = new mysqli('localhost', 'root', '', 'php-mysql-crud'); 

if(!$con) {
    die(mysqli_error($con)); 
}

?>