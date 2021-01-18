<?php

$mysqli = new mysqli("db", "root", "example");

if ($mysqli->connect_errno) {
    printf("Error: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("All right!");
}

?>