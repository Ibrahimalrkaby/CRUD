<?php

include "../db_conn.php";

function read($conn)
{
    $sql = "INSERT INTO users(first_name, last_name, email)
    VALUES (?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$first_name, $last_name, $email]);

    $sm = "Successfully Created";
    header("location: ../create.php?success=$sm");
}
