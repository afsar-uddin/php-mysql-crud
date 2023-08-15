<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <div class="nwt-data-read">
        <a href="create.php">Create User</a>
        <table border>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from `users`";
                    $sql_query = mysqli_query($con, $sql);

                    if($sql_query) {
                        while($row = mysqli_fetch_assoc($sql_query)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td>
                                        <a href="update.php?updateId=<?php echo $row['id']; ?>">Update</a>
                                        <a href="delete.php?deleteId=<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>