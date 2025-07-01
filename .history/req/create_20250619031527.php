<?php

if (
    isset($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['email'])
) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    if (
        empty($first_name) ||
        empty($last_name) ||
        empty($email)
    ) {
        $em = "Please fill out all fields";
    }
};
