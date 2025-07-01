<?php

if (
    isset($_POST['first_name']) &&
    isset($_POST['last_name']) &&
    isset($_POST['email'])
) {
    echo $_POST['first_name'];
};
