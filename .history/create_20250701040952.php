<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Add New User</h2>
    <form method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" class="btn">Save</button>
    </form>
    <a href="index.php" class="back-link">← Back to User List</a>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO users (first_name, last_name, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email']
        ]);
        header("Location: index.php");
        exit;
    }
    ?>
</body>

</html>