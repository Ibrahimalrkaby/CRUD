<?php
include "req/read.php";
include "db_conn.php";
if (isset($_GET['id'])) {

    $user = readById($conn, $id);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP_CRUD - Update</title>
    </head>

    <body>
        <div class="form-holder">
            <a href="index.php">View and Read</a>
            <form action="req/update.php" method="POST">

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?= htmlspecialchars($_GET['error']) ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?= htmlspecialchars($_GET['success']) ?></p>
                <?php } ?>

                <label>First Name</label>
                <input type="text" name="first_name" id="first_name"
                    value="<?= $user['first_name'] ?>"><br>

                <label>Last Name</label>
                <input type="text" name="last_name" id="last_name"
                    value="<?= $user['last_name'] ?>"><br>

                <label>Email</label>
                <input type="text" name="email" id="email"
                    value="<?= $user['email'] ?>"><br>

                <input type="text" name="id" value="<?= $user['id'] ?>" hidden>

                <button type="submit">Update</button>
            </form>
        </div>
    </body>

    </html>

<?php } else {
    header("location:index.php");
} ?>