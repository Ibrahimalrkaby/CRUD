<?php

$ServerName = "localhost";
$UserName = "root";
$password = "";

$db_name = "crud_app";

try {
    $conn = new PDO(
        "mysql:host=$ServerName;dbname= $db_name",
        $UserName,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
