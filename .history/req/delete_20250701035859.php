<?php
if (isset($_GET['id'])) {
    include './db_conn.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$first_name, $last_name, $email]);
    $sm = "Successfully Created";
    header("location: ../create.php?success=$sm");
}
