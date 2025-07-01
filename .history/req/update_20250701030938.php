<?php

if (
    isset($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['email']) &&
    isset($_POST['id'])
) {
    include "../db_conn.php";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    if (
        empty($first_name) ||
        empty($last_name) ||
        empty($email) ||
        empty($id)
    ) {
        $em = "Please fill out all fields";
        header("location: ../update.php?error=$em");
    } else {
        $sql = "UPDATE INTO users SET first_name=?, last_name=?, email? WHERE id=?)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email, $id]);

        $sm = "Successfully Update";
        header("location: ../create.php?success=$sm");
    }
};
