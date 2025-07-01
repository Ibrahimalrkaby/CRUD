<?php



function read($conn)
{
    $sql = "SELECT * FROM users";

    $stmt = $conn->prepare($sql);
    $stmt->execute([]);

    if ($stmt->rowCount() > 0) {
        $users = $stmt->fetchAll();
    } else $users = 0;

    return $users;
}
