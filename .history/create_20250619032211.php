<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_CRUD - Create</title>
</head>

<body>
    <div class="form-holder">
        <form action="req/create.php" method="POST">

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php $_GET['error'] ?></p>
            <?php } ?>

            <label>First Name</label>
            <input type="text" name="first_name" id="first_name"><br>

            <label>Last Name</label>
            <input type="text" name="last_name" id="last_name"><br>

            <label>Email</label>
            <input type="text" name="email" id="email"><br>

            <button type="submit">Create</button>
        </form>
    </div>
</body>

</html>