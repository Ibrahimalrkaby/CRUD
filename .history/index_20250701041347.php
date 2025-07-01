<?php
include "req/read.php";
include "db_conn.php";
$users = read($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_crud</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>User List</h2>
    <a href="create.php" class="btn">+ Create New User</a><br>

    <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?= htmlspecialchars($_GET['success']) ?></p>
    <?php } ?>

    <?php if ($users != 0) { ?>
        <table>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['first_name']) ?></td>
                    <td><?= htmlspecialchars($user['last_name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td>
                        <a href="update.php?id=<?= $user['id'] ?>" class="edit">Edit</a>
                        <a href="req/delete.php?id=<?= $user['id'] ?>" class="delete" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p class="error">❌ No data found in the database</p>
    <?php } ?>
</body>

</html>