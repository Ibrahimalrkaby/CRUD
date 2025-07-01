<?php

$ServerName = "localhost";
$UserName = "root";
$password = "";

$db_name = "crud_db";

try {
    $conn = new PDO(
        "mysql:host=$serverName;dbname= $db_name",
        $UserName,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
