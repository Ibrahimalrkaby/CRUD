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
    <a href="create.php">Create</a>
    <?php if ($users != 0) {
        foreach ($users as $user) { ?>

            <table>
                <tr>
                    <td>Id</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['first_name'] ?></td>
                    <td><?= $user['last_name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a href="req/delete.php?id=<?= $user['id'] ?>">Delete</a>
                        <a href="req/delete.php?id=<?= $user['id'] ?>">Delete</a>
                    </td>
                </tr>
            </table>

        <?php }
    } else { ?>
        <p class="error">Error: No data found in the database</p>

    <?php } ?>
</body>

</html>