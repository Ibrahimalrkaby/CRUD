<?php



function read($conn)
{
    $sql = "SELECT * FROM users

    $stmt = $conn->prepare($sql);
    $stmt->execute([$first_name, $last_name, $email]);
}
