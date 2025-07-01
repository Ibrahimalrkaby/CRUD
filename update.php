<?php include "db_conn.php";

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE users SET first_name=?, last_name=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $id
    ]);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Edit User</h2>
    <form method="POST">
        <input type="text" name="first_name" value="<?= htmlspecialchars($user['first_name']) ?>" required>
        <input type="text" name="last_name" value="<?= htmlspecialchars($user['last_name']) ?>" required>
        <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
        <button type="submit" class="btn">Update</button>
    </form>
    <a href="index.php" class="back-link">← Back to User List</a>
</body>

</html>